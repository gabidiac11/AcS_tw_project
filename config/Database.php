<?php



class Database
{

    private static $db_config = [
        'servername' => "localhost",
        'username' => "root",
        'password' => "",
        'dbname' => "acs_tw"
    ];

    private $conn;

    /**
     * 
     * @var Singleton
     */
    private static $instance;

    private function __construct()
    {
        $this->createConnection();
    }

    private function createConnection()
    {
        $this->conn = new mysqli(
            Database::$db_config['servername'],
            Database::$db_config['username'],
            Database::$db_config['password'],
            Database::$db_config['dbname']
        );

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        $this->conn->set_charset("utf8");
    }

    /**
     * @param {string} 
     */
    public function select($sql)
    {
        $rows = [];

        $conn = $this->conn;

        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        } 

        return $rows;
    }

    public function update($sql) {

    }

    public function insert($sql) {
        $conn = $this->conn;
        $conn->query($sql);

        return $conn->insert_id;
    }

    public function prepare($sql) {
        $conn = $this->conn;
        return $conn->prepare($sql);
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function escape($string) {
        return mysqli_real_escape_string($this->conn, $string);
    }
}
