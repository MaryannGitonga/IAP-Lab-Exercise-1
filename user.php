<?php

    include_once 'account.php';
    session_start();

    class User implements Account{
        private $userName, $userEmail, $userCity, $userPass, $userPhoto, $inputPass, $newPass;

        public function __construct(){
            $this->userName = "";
            $this->userEmail = "";
            $this->userPass = "";
            $this->userCity = "";
            $this->userCity = "";
        }

        public function setUserName($userName)
        {
            return $this->userName = $userName;
        }

        public function setUserEmail($userEmail)
        {
            return $this->userEmail = $userEmail;
        }

        public function setUserPass($userPass){
            return $this->userPass = $userPass;
        }

        public function setUserCity($userCity){
            return $this->userCity = $userCity;
        }

        public function setUserPhoto($userPhoto){
            return $this->userPhoto = $userPhoto;
        }

        public function setInputPass($inputPass){
            return $this->inputPass = $inputPass;
        }

        public function setNewPass($newPass){
            return $this->newPass = $newPass;
        }

        public function getUserName()
        {
            return $this->userName;
        }

        public function getUserEmail()
        {
            return $this->userEmail;
        }

        public function getUserPass(){
            return $this->userPass;
        }

        public function getUserCity(){
            return $this->userCity;
        }

        public function getUserPhoto(){
            return $this->userPhoto;
        }

        public function getInputPass(){
            return $this->inputPass;
        }

        public function getNewPass(){
            return $this->newPass;
        }

        public function register($pdo){
            try {
                $stmt = $pdo->prepare("INSERT INTO users (user_full_name, user_email, city_of_residence, profile_photo, user_password) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$this->userName, $this->userEmail, $this->userCity, $this->userPhoto, $this->userPass]);
                $stmt = null;
                return "User has been saved";
            } catch (PDOException $e) {
                echo "here";
                return $e->getMessage();
            }
        }
        public function login($pdo){
            try {
                $stmt = $pdo->prepare("SELECT user_password FROM users WHERE user_email = ?");
                $stmt->execute([$this->userEmail]);
                $result = $stmt->fetch();
                $this->userPass = $result['user_password'];
                if (password_verify($this->inputPass, $this->userPass)) {
                    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_email = ? AND user_password = ?");
                    $stmt->execute([$this->userEmail, $this->userPass]);
                    $result = $stmt->fetch();
                    $stmt = null;
                return $result;
                } else {
                    echo 'Invalid password.';
                }
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        public function changePassword($pdo)
        {
            try {
                $stmt = $pdo->prepare("UPDATE users SET user_password = $userPass WHERE user_id = ?");
                $stmt->execute([$this->userPass, $_SESSION['id']]);
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

        public function __destruct(){

        }
    }

?>