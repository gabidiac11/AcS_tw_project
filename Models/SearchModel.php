<?php

require_once __DIR__."./Entities/Accident.php";

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
}
