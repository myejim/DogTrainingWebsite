<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'customers';

    private $conn;
    private $conn_error = '';

    function __construct() {
        mysqli_report(MYSQLI_REPORT_ERROR);

        $this->conn = mysqli_connect($this->host, $this->dbname);

        if ($this->conn === false) {
            $this->conn_error = "Failed to connect to DB: " . mysqli_connect_error();
        }
    }

    function __destruct() {
        mysqli_close($this->conn);
    }

    function getDbConn () {
        return $this->conn;
    }

    function getDbError() {
        return $this->conn_error;
    }

    function getDbHost() {
        return $this->host;
    }

    function getDbName() {
        $this->dbname;
    }
}

