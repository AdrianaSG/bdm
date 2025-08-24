<?php

$host = "localhost";
$user = "root";
$password = "admin";
$bd = "bd";


$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $bd
);


if (mysqli_connect_errno()) {
    echo "". mysqli_connect_error();
}else{
    echo "conectado a la bd";
}