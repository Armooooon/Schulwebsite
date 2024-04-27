<?php
//Login Seite von Aron Halaoui
$cssFiles = ['login.css'];
Layout::Header("Login", $cssFiles);
?>

<!-- Login Form von Aron Halaoui -->
<div class="containerLogin">
  <div class="login-form">
    <h2>Login</h2>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</div>

<?php Layout::Footer(); ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $authController = new AuthController();
    $authController->login($username, $password);
}
?>
