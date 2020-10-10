<?php

    class Operations {
        function __construct(){}

        public function saveUser($pdo, $userName, $userEmail, $userCity, $userPass, $userPhoto){
            try {
                $stmt = $pdo->prepare("INSERT INTO users (user_full_name, user_email, city_of_residence, profile_photo, user_password) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$userName, $userEmail, $userCity, $userPhoto, $userPass]);
                $stmt = null;
                return "User has been saved";
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }

        public function readUser($pdo){
            try {
                $stmt=$pdo->prepare("SELECT * FROM users");
                $stmt->execute();
                $result = $stmt->fetchAll();
                $stmt = null;
                return json_encode($result);
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }

        public function searchUser($pdo, $userId)
        {
            try {
                $stmt = $pdo->prepare("SELECT * FROM users WHERE user_id = ?");
                $stmt->execute([$userId]);
                $result = $stmt->fetch();
                $stmt = null;
                return json_encode($result);
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }

        public function editPassword($pdo, $userPass, $userId)
        {
            try {
                $stmt = $pdo->prepare("UPDATE users SET user_password = $userPass WHERE user_id = ?");
                $stmt->execute([$userPass, $userId]);
                $result = $stmt->fetch();
                $stmt = null;
                return "User Password has been changed";
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        
        public function deleteUser($pdo, $userId)
        {
            try {
                $stmt = $pdo->prepare("DELETE from users WHERE user_id = ?");
                $stmt->execute([$userId]);
                $stmt = null;
                return "User has been deleted";
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }

?>