<?php

class Register extends DBConnect
{
    protected function checkUser($username,$email){
    $stmt = $this->connect()->prepare('SELECT username from users WHERE username = ? OR email = ?;');

        if (!$stmt->execute(array($username,$email))){
            $stmt = null;
            // Return to the index page
        }

        if ($stmt->rowCount() >0){  //if we have found a user with the same details on the db
            $result = false;
        }else{
            $result = true;
        }


    }



}