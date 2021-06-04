<?php

class Search extends Controller
{
    /**
     * @var SearchModel
     */
    private $searchModel;

    function __construct()
    {
        parent::__construct();

        $this->searchModel = $this->loadModel("SearchModel");
    }

    public function index()
    {
        $this->loadView("Search", []);
    }

    public function accidents()
    {
        echo json_encode($this->searchModel->getAccidents());
    }

    /**
     * @OA\Get(
     *     path="/search/filters",
     *     tags={"search"},
     *     summary="Returns the available filters",
     *     description="Returns the available filters that are modified by the frontend and sent back for filtered searching (a part of them)",
     *     operationId="filters",
     *     @OA\Response(
     *         response=200,
     *          description="successful operation",
     *         @OA\JsonContent(
     *          @OA\Property(
     *              property="filters",
     *    	        type="array",
     *              @OA\Items(ref="#/components/schemas/Filter")
     *    	    )
     *      )
     *     )
     * )
     */
    public function filters()
    {
        echo json_encode($this->searchModel->getFilters(), JSON_PRETTY_PRINT);
    }

    /**
     * @OA\Schema(
     *   schema="ResultsResponse",
     *   allOf={
     *     @OA\Schema(
     *       @OA\Property(property="numberOfResults", type="integer"),
     *       @OA\Property(property="page", type="integer"),
     *       @OA\Property(property="pageMax", type="integer"),
     *       @OA\Property(property="perPage", type="integer"),
     *       @OA\Property(property="results", type="array", @OA\Items(ref="#/components/schemas/Accident"))
     *     )
     *   }
     * )
     */

    /**
     * @OA\Post(
     *     path="/search/results",
     *     tags={"search"},
     *     summary="Returns a filtered and sorted (optional) list of accidents",
     *     description="Returns a array of accident entities",
     *     operationId="results",
     *     @OA\Response(
     *         response=200,
     *          description="successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/ResultsResponse")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid filter data"
     *     ),
     *     @OA\RequestBody(
     *      @OA\JsonContent(
     *          @OA\Property(
     *              property="filters",
     *    	        type="array",
     *              @OA\Items(ref="#/components/schemas/Filter")
     *    	    )
     *      )
     *    ),
     *     @OA\Parameter(
    *       name="search",
    *       description="A string value by which to filter the accident description and ID",
    *       required=false,
    *       type="string",
    *       in="query"
    *     ),
     *     @OA\Parameter(
    *       name="page",
    *       description="Page number",
    *       required=false,
    *       type="int",
    *       in="query"
    *     ),
     *     @OA\Parameter(
    *       name="perPage",
    *       description="Results per page",
    *       required=false,
    *       type="int",
    *       in="query"
    *     ),
     *     @OA\Parameter(
    *       name="sortBy",
    *       enum={ "STATE", "LOCATION", "SEVERITY", "TIME", "DISTANCE", "TEMPERATURE", "WIND_CHILL", "HUMIDITY", "PRESSURE", "VISIBILITY", "WIND_SPEED", "PRECIPITATION", "WIND_DIRECTION", "WEATHER_CONDITION"},
    *       description="Field to sort by (ascendent) a one of the fields",
    *       required=false,
    *       type="string",
    *       in="query"
    *     ),
     *     @OA\Parameter(
    *       name="dir",
    *       enum={ "1", "0"},
    *       description="Direction of sorting - 1 - dec, 0 - asc.If sortBy is null this is ignored",
    *       required=false,
    *       type="string",
    *       in="query"
    *     )
     * )
     */
    public function results()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo json_encode($this->searchModel->getResults($this->postData), JSON_PRETTY_PRINT);
        } else {
            $this->loadView("NotFound", []);
        }
    }

    /**
     * export a set of ids results
     */
    public function export()
    {
        $this->loadModel("ExportModel")->exportCSVResults();
    }

    /**
     * export last search
     */
    public function exportAll()
    {
        $this->loadModel("ExportModel")->exportCSVOfSession();
    }
}
