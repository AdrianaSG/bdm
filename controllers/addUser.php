<?php
require_once "../conn/connection.php";
require_once "../dao/UserDAO.php";

if (isset($_POST["name"]) && $_POST["name"] != "") {
    $name = $_POST["name"];

    $userDAO = new UserDAO($conn);
    $result = $userDAO->create($name);

   if ($result) {
       echo "User added successfully.";
   } else {
       echo "Error adding user.";
   }

}


?>