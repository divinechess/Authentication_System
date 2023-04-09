<?php
include('index.html');
require_once('SignupController.php');
require_once('Register.php');
require_once('DBConnect.php');


$email = $_POST['email'];
$user = $_POST['username'];
$password = $_POST['password'];
$passconfirm = $_POST['passconfirm'];

echo $password;
echo "<BR>";
echo $passconfirm;

$signupControl = new SignupController($email,$user,$password,$passconfirm);

if(!$signupControl->emptyValue()) {
    echo "Please fill out all fields correctly";

}
if (!$signupControl->pwdMatch()){
    echo "Passwords do not match";

}else{
   $register = new Register();
   if($register->checkUser($user,$email)){
        echo "These login details are already taken on our system";

   }else{
       $register->registerUser($user,$password,$email);
       echo "your details have been registered";
       header('login.php');
   }

}



?>

<form action="signup.php" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Enter Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="email">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Enter username</label>
        <input type="username" name="username" class="form-control" id="username" placeholder="username">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Enter Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="mb-3">
        <label for="passconfirm" class="form-label">Confirm Password</label>
        <input type="password" name="passconfirm" class="form-control" id="passconfirm" placeholder=" Confirm Password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>



