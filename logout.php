<?php

    include_once 'db_connect.php';
    include_once 'user.php';
    session_start();

    //PDO handle
    $con = new DBConnector();
    $pdo = $con->connectToDB();

    $user = new User();
    $user->logout($pdo);
    header("Location:/IAP-Lab-Project/templates/login.php");

?>