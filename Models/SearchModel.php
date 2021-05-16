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

        $query = array_reduce($filters, function($prev, $filter) {
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

        $results = [];

        return [
            'query' => $query,
            'filters_applied' => $filters,
            'results' => $results
        ];
    }
}
