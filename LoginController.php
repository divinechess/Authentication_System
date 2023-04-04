<?php

class LoginController
{
    private $username;
    private $password;


    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;


    }

    private function emptyValue():bool{
        if(empty($this->username) || empty($this->password)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }






}