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
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    public function pwdLength ():bool {
        if(strlen($this->username) < 8 || strlen($this->password) < 8){
            $result = true;
        }else{
            $result = false;
        }
        return $result;



    }






}