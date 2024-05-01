<?php
require_once 'CLASS/class.php';
//Von Aron Halaoui
require_once 'CLASS/AuthController.php';
//von Aron Halaoui
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$authController = new AuthController();
$authController->logout();
header('login.php');
}


//view
require_once 'VIEW/adminpanel.php';