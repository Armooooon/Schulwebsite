<?php
//Authentifizerungsklasse von Aron Halaoui
require_once 'CLASS/db.php'; 

class AuthController {
    public function login($username, $password) {

        $stmt = db::$pdo->prepare("SELECT * FROM benutzer WHERE benutzername = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        
        if ($user && password_verify($password, $user['password'])) {
          
            session_start();
            $_SESSION['username'] = $username;

           
            if ($username === 'Admin' && password_verify('admin', $user['password'])) {
               
                header("Location: adminpanel.php");
                exit();
            } else {
                
                header("Location: user_panel.php");
                exit();
            }
        } else {
            echo'<div>Error</div>';
            return false;
        }
    }
}
