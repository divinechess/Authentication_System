<?php


$email = $_POST['email'];
$user = $_POST['username'];
$password = $_POST['password'];
$passconfirm = $_POST['passconfirm'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<div class="mb-3">
    <label for="password" class="form-label">Enter Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
</div>

<div class="mb-3">
    <label for="username" class="form-label">Enter Username</label>
    <input type="username" class="form-control" id="username" placeholder="Username">
</div>


</body>
</html>