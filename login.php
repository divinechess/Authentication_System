<?php
include('index.html');
require_once('LoginController.php');
require_once('LoginModel.php');
//require_once('login.php');



$user = $_POST['username'];
$password = $_POST['password'];



$logon = New LoginController($user,$password);

if ($logon->emptyValue()) {
    echo "please fill out all fields correctly";

}else {
$loginModel = New LoginModel();
$result = $loginModel->checkUser($user,$password);
echo $result;
}

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




