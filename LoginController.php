<?php

class LoginController
{
    protected $username;
    protected $password;


    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;


    }

    public function emptyValue():bool{
        if(empty($this->username) || empty($this->password)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }






}