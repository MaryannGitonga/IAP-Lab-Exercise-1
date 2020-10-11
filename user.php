<?php

    include_once 'account.php';
    session_start();

    class User implements Account{
        private $userName, $userEmail, $userCity, $userPass, $userPhoto;

        public function register($pdo, $userName, $userEmail, $userCity, $userPass, $userPhoto){
            try {
                $stmt = $pdo->prepare("INSERT INTO users (user_full_name, user_email, city_of_residence, profile_photo, user_password) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$userName, $userEmail, $userCity, $userPhoto, $userPass]);
                $stmt = null;
                return "User has been saved";
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        public function login($pdo, $userEmail, $userPass){
            try {
                $stmt = $pdo->prepare("SELECT * FROM users WHERE user_full_name = ? AND user_password = ?");
                $stmt->execute([$userName, $userPass]);
                $result = $stmt->fetch();
                print_r($result);
                $stmt = null;
                return json_encode($result);
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        public function changePassword($pdo, $userPass)
        {
            try {
                $stmt = $pdo->prepare("UPDATE users SET user_password = $userPass WHERE user_id = ?");
                $stmt->execute([$userPass, $_SESSION['id']]);
                $result = $stmt->fetch();
                $stmt = null;
                return "User Password has been changed";
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        public function logout($pdo){
            session_destroy();
        }
    }

?>