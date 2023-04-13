<?php
include('index.html');
require_once('LoginController.php');
require_once('LoginModel.php');




@$user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$user = filter_var($user, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => "/^[a-zA-Z0-9]+$/")));

@$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$password = filter_var($password, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => "/^[a-zA-Z0-9]+$/")));






$logon = New LoginController($user,$password);

if ($logon->emptyValue()) {
    echo "Please fill out all fields correctly";
    echo "<br>";

}
if ($logon->pwdLength()) {
    echo "The Length of the username or password is a minimum of 8";
    echo "<br>";
}
$loginModel = New LoginModel();
$result = $loginModel->checkUser($user,$password);
echo $result;


?>

<form action="login.php" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Enter Username</label>
        <input type="username" name="username" class="form-control" id="username" placeholder="Username">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Enter Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>





