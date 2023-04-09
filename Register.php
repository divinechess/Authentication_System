<?php
require_once('DBConnect.php');

class Register extends DBConnect
{
    public function checkUser($username,$email){
    $stmt = $this->connect()->prepare('SELECT user_name from users WHERE user_name = ? OR email = ?;');

        if (!$stmt->execute(array($username,$email))){  // if connection fails go back to signup page
            $stmt = null;
            header('signup.php');
        }

        if ($stmt->rowCount() >0){  //if we have found a user with the same details on the db
            $result = false;
        }else{

            $result = true;
        }


    }

    public function registerUser ($username,$password,$email){
        $stmt = $this->connect()->prepare('INSERT INTO users (user_name,pwd,email) VALUES (?, ?, ?);');

        if (!$stmt->execute(array($username,$password,$email))){  // if connection fails go back to signup page
            $stmt = null;
            header('signup.php');
        }


    }



}