<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 24/04/17
 * Time: 05:35 PM
 */

namespace cinemadb;

class cinemadb
{
    public $host = 'localhost';
    public $user = 'root';
    public $pass = 'andres';
    public $db = 'promocinal';
    public $connection = null;

    function __construct() {

    }

    public function connect()
    {
        $this->connection = mysqli_connect($this->host,$this->user, $this->pass, $this->db );
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function runQuery($query)
    {
        $result = mysqli_query($this->connection, $query);
        return $result;
    }
}
?>
