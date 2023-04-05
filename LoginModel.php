<?php
require_once('DBConnect.php');
class LoginModel extends DBConnect
{

    public function checkUser($username,$password){
        $stmt = $this->connect()->prepare('SELECT user_name from users WHERE user_name = ? AND  pwd = ?;');

        if ($stmt->execute(array($username,$password))){
            $stmt = null;
            // Return to the index page
        }

        if ($stmt->rowCount() >0){  //if user details match
            $result = true;
        }else{
            $result = false;
        }


    }


}