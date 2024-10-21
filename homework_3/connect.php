<?php
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "login";

session_start();



$conn = mysqli_connect(
    $server_name,
    $username,
    $password,
    $db_name
);

if(!$conn){
    echo "Connection faild".mysqli_connect_error();
}