<?php

    include_once 'db_connect.php';
    include_once 'operations.php';
    include_once 'user.php';
    session_start();

    //PDO handle
    $con = new DBConnector();
    $pdo = $con->connectToDB();

    if (isset($_POST["register"])){
        $userName = $_POST["full-name"];
        $userEmail = $_POST["email"];
        $userCity = $_POST["residence"];
        $userPhoto = $_FILES["profile-photo"]['name'];
        $userPass = password_hash($_POST["password"], PASSWORD_DEFAULT);

        //user object
        $user = new User();
        $user->setUserName($userName);
        $user->setUserEmail($userEmail);
        $user->setUserPass($userPass);
        $user->setUserCity($userCity);
        $user->setUserPhoto($userPhoto);

        $message = $user->register($pdo);
        echo $message;
        header("Location: /Simple-UI/templates/login.php");
    }
?>