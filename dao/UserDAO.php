<?php

require_once "../conn/connection.php";
require_once "../models/User.php";


class UserDAO{
    private $conn;

    public function __construct($connection){
        $this->conn = $connection;
    }

    public function create($name){
        $sql = "INSERT INTO usuario(name) VALUES (?)";
        $stmt = $this->conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("s", $name);
            $result = $stmt->execute();
            $stmt->close();
            return $result;
        }
        return false;
    }


}