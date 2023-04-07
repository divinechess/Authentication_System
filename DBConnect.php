<?php

class DBConnect
{
protected function Connect (){
    try {
     $username = "root";
     $password = "";
     $db = new PDO('mysql:host=localhost;dbname=authsystem',$username,$password);
    // echo var_dump($db);
     return $db;
    }
    catch (PDOException $e){
        echo "Error!:" . $e->getMessage() . "</ BR>";
        die();
    }





}



}