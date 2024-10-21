<?php

session_start();

if(!isset($_SESSION["username"])){

    header("Location: index.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>THİS İS USER HOME PAGE </h1> <?= $_SESSION["username"]; ?>

    <a href="logout.php">logout</a>
</body>
</html>