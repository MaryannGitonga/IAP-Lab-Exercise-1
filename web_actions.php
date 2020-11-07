<?php

    include_once 'db_connect.php';
    include_once 'user.php';
    if(!isset($_SESSION)) { session_start(); }

    //PDO handle
    $con = new DBConnector();
    $pdo = $con->connectToDB();


    if (isset($_POST["register"])){
        $userName = $_POST["full-name"];
        $userEmail = $_POST["email"];
        $userCity = $_POST["residence"];
        $userPhoto = $_FILES["profile-photo"];
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
        header("Location: /IAP-Lab-Project/templates/login.php");
    }
    
    if (isset($_POST['login'])) {
        $userEmail = $_POST["email"];
        $userPass = $_POST["password"];

        $user = new User();
        $user->setUserEmail($userEmail);
        $user->setInputPass($userPass);
        $user_details = $user->login($pdo);
        
        $_SESSION['user_id'] = $user_details['user_id'];
        $_SESSION['user_name'] = $user_details['user_full_name'];
        $_SESSION['user_email'] = $user_details['user_email'];
        $_SESSION['city'] = $user_details['city_of_residence'];
        $_SESSION['photo'] = $user_details['profile_photo'];

        header("Location: /IAP-Lab-Project/templates/index.php");
    }

    if (isset($_POST['change-pass'])) {
        $inputPass = $_POST["current-pass"];
        $newPass = password_hash($_POST["new-pass"], PASSWORD_DEFAULT);
        $confirmPass = $_POST['confirm-pass'];

        if(password_verify($confirmPass, $newPass)){
            $user = new User();
            $user->setInputPass($inputPass);
            $user->setNewPass($newPass);
            $message = $user->changePassword($pdo);
            echo $message;
            header("Location: /IAP-Lab-Project/templates/index.php");
        }else {
            echo "Passwords don't match";
        }
    }

    if (isset($_POST['add-food'])) {
        $food_name = $_POST['food-name'];
        $food_description = $_POST['food-description'];
        $food_price = $_POST['food-price'];
        $food_image = $_FILES['food-photo'];

        $original_image_file = $food_image["name"];
        $file_tmp_location = $food_image["tmp_name"];

        $file_type = substr($original_image_file, strpos($original_image_file, "."), strlen($original_image_file));

        $file_path = "templates/images/food_images/";
        $new_file_name = time().$file_type;
        
        if(move_uploaded_file($file_tmp_location, $file_path.$original_image_file)){
            try{
                $stmt = $pdo->prepare("INSERT foods(food_name, food_description, food_price, food_image) VALUES(?, ?, ?, ?)");
                $stmt->execute([$food_name, $food_description, $food_price, $original_image_file]);
                $stmt = null;
                echo "Food has been added to the db";
            }catch (PDOException $e){
                return $e->getMessage();
            }
        }
    }
?>