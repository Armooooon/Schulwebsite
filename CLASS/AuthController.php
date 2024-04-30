<?php
//Authentifizerungsklasse von Aron Halaoui
require_once 'CLASS/db.php';

class AuthController
{
    public function login($username, $password)
    {
        
        $stmt = db::$pdo->prepare("SELECT * FROM benutzer WHERE benutzername = :username");
        $stmt->execute(['username' => strtolower($username)]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($user && password_verify($password, $user['password'])) {

            session_start();
            $_SESSION['username'] = $username;
            header("Location: adminpanel.php");


        }else {
            header("Location: login.php");
        }
}

    public function logout()
    {
        session_destroy();
        header("Location: Login.php");
        exit();
    }
    
}
