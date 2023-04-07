<?php

class SignupController
{
    private $email;
    private $username;
    private $password;
    private $passconfirm;

    public function __construct($email,$username,$password,$passconfirm)
    {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->passconfirm = $passconfirm;

    }

    public function emptyValue(){
        if(empty($this->email) || empty($this->username) || empty($this->password) || empty($this->passconfirm)){
        $result = false;
        }else{
        $result = true;
        }
    return $result;
    }


    public function pwdMatch (){
        if ($this->password !== $this->passconfirm){
            $result = false;
        }else{
        $result = true;
        }
    return $result;

    }



}