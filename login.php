<?php
include('index.html');
$user = $_POST['username'];
$password = $_POST['password'];

?>


<form action="login.php" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Enter Username</label>
        <input type="username" class="form-control" id="username" placeholder="Username">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Enter Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="button" class="btn btn-primary">Login</button>
</form>


