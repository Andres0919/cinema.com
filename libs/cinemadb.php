<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 24/04/17
 * Time: 05:35 PM
 */

class cinemadb
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'andres';
    private $db = 'promocinal';
    private $connection = null;

    function __construct() {

    }

    public function connect()
    {
        $this->connection = mysqli_connect($this->host,$this->user, $this->pass, $this->db );
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
        return $this->connection;
    }

    public function runQuery($query)
    {
        $result = mysqli_query($this->connection, $query);
        return $result;
    }
}
?>
