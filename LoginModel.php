<?php
require_once('DBConnect.php');
class LoginModel extends DBConnect
{

    public function checkUser($username,$password){
        $stmt = $this->connect()->prepare('SELECT user_name from users WHERE user_name = ? AND  pwd = ?;');

        if (!$stmt->execute(array($username,$password))){
            $stmt = null;
            // header(login.php);// Return to the login page
        }

        if ($stmt->rowCount() >0){  //if user details match
            $result = true;
        }else{
            $result = false;
        }
        return $result;

    }


}