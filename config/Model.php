<?php

class Model
{
    /**
     * @var Database|Singleton
     */
    public $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    /** verified if an array has non-null given fields */
    protected function fieldsNotPresent($array, $fields)
    {
        return count(array_filter(array_map(function ($field) use ($array) {
            if (isset($array[$field])) {
                return $array[$field];
            }

            return null;
        }, $fields), function ($item) {
            return $item;
        })) !== count($fields);
    }

    public function badResponse($response)
    {
        header($_SERVER["SERVER_PROTOCOL"] . " 400 Bad Request");
        die(json_encode($response));
    }
}
