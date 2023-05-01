<?php
class Database{
    public static function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "notas_master";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $conn->query("SET NAMES 'UTF8'");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
            return $conn;
        }
    }
}
?>