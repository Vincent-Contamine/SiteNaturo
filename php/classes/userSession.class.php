<?php

	class UserSession {
    
        public function __construct(){
        	if(session_status() == PHP_SESSION_NONE){
        		session_start();
            }
        }
        
        public function create($userId, $firstName, $lastName, $email){
        	$_SESSION["user"] = [
                'UserId'    => $userId,
                'FirstName' => $firstName,
                'LastName'  => $lastName,
                'Email'     => $email
            ];
        }
        
        public function isAuthenticated(){
            
            if (array_key_exists('user', $_SESSION) && empty($_SESSION['user']) == false)
            {
                return true;
            }
            return false;     
        }

        public function getFullName(){
            if ($this->isAuthenticated() == true)
            {
                return $_SESSION['user']['FirstName']." ".$_SESSION['user']['LastName'];
            }
        }
        public function getName(){
            if ($this->isAuthenticated() == true)
            {
                return $_SESSION['user']['FirstName']." ".substr($_SESSION['user']['LastName'],0,1).".";
            }
        }
        public function getId(){
            if ($this->isAuthenticated() == true)
            {
                return $_SESSION['user']['UserId'];
            }
        }
        public function destroy()
        {
            $_SESSION = [];
            session_destroy();
        }
        public function isAdmin()
        {
            if ($_SESSION["user"]["UserId"] != 1){
                header('Location: page404.php');
                exit();
            }
        }
    }