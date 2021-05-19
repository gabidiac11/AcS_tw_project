<?php

require_once __DIR__."./Entities/Accident.php";
require_once __DIR__."./Entities/Filter.php";

class SearchModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAccidents(): array
    {
        return Accident::resultsToInstances($this->db->select("SELECT * FROM accidents LIMIT 100"));
    }

    /**
     * @return Filter[]
     */
    public function getFilters(): array
    {
       return Filter::createFilters($this->db);
    }


    /**
     * verifies if filter json from request have the minimal correct form
     * @param $jsonFilter
     * @return array|string[]
     */
    private function validateFilterJson($jsonFilter) : array {
        if(!is_array($jsonFilter)) {
            return ['message' => "Bad filter data: ".json_decode($jsonFilter)];
        }

        foreach ($jsonFilter as $index => $item) {
            if(
                !is_array($item) ||
                !isset($item['availableOptions']) ||
                !is_array($item['availableOptions']) ||
                array_reduce($item['availableOptions'], function ($isBad, $option) {
                    return $isBad || !is_array($option) || !isset($option['value']) || !isset($option['key']);
                })
            ) {
                return ['message' => "Bad filter data at item index $index: ".json_decode($item)];
            }
        }

        return [];
    }

    /**
     * @param $requestData
     * @return array
     */
    public function getResults($requestData): array {
        $jsonFilters = $requestData['filters'] ?? null;

        $response = $this->validateFilterJson($jsonFilters);
        if(isset($response['message'])) {
           $this->badResponse($response);
        }

        $filters = array_map(
        function ($filter) use($jsonFilters) {
            /**
             * @var Filter
             */
            $filter->searchAndApplyJson($jsonFilters);
            return $filter;
        }, $this->getFilters());

        $conditionQuery = array_reduce($filters, function($prev, $filter) {
            $condition = $filter->queryBuild();

            if($prev != "" && $condition != "") {
                return "$prev AND ($condition) ";
            }
            if($prev != "") {
                return $prev;
            }
            if($condition != "") {
                return " ($condition) ";
            }
            return "";
        }, "");


        /** safely integrate the sort by value in the query (allow only known columns to slip by) */
        $sortBy = "";
        if(isset($_GET['sortBy']) && isset(Accident::$SORT_COLUMN_MAPPING[$_GET['sortBy']])) {
            $column = Accident::$SORT_COLUMN_MAPPING[$_GET['sortBy']];
            $sortBy = " ORDER BY $column";
        }

        if(isset($_GET['search']) && $_GET['search'] != "") {
            
            if(trim($conditionQuery) != "") {
                $conditionQuery .= " AND ";
            } 
            $search = $this->db->escape(strtoupper($_GET['search']));
            $conditionQuery .= " UPPER(Description) like '$search%' OR UPPER(ID) like '$search%' ";
        }

        if(trim($conditionQuery) == "") {
            $conditionQuery  = 1;
        }

        $page = 1;
        $perPage = 20;
        if(isset($_GET['page']) && is_numeric($_GET['page'])) {
            $page = intval($_GET['page']);
        }

        $offset = $perPage * ($page - 1);
        $paginationQuery = " LIMIT $perPage OFFSET $offset";

        $afterWhereQuery = "$conditionQuery $sortBy $paginationQuery";

        $query = "SELECT * FROM accidents WHERE $afterWhereQuery";
        $results = Accident::resultsToInstances($this->db->select($query));

        /** calculate pagination props */
        $numOfResults = intval($this->db->select("SELECT COUNT(*) as numOfResults FROM accidents WHERE $conditionQuery")[0]['numOfResults']);
        $pageMin = 1;
        $pageMax = ceil($numOfResults / $perPage);

        return [
            'query' => $query,
            'filterApplied' => $filters,
            'results' => $results,
            'numberOfResults' => $numOfResults,
            'page' => $page,
            'pageMax' => $pageMax
        ];
    }
}
