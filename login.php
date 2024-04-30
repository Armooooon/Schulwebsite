<?php
//Login Modellklasse von Aron Halaoui
require_once 'CLASS/class.php';
require_once 'CLASS/AuthController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $authController = new AuthController();
  $authController->login($username, $password);
}

//view
require_once 'VIEW/login.php';