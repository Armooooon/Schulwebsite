<?php
//Authentifizerungsklasse von Aron Halaoui
require_once 'CLASS/db.php';

class AuthController
{
    //Funktion zum einloggen
    public function login($username, $password)
    {
        //SQL Statement
        $stmt = db::$pdo->prepare("SELECT * FROM benutzer WHERE benutzername = :username");
        //Ausführung
        $stmt->execute(['username' => strtolower($username)]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        //Wenn der Benutzername und das Passwort übereinstimmen
        if ($user && password_verify($password, $user['password'])) {
            //Dann Session Starten            
            session_start();
            //Session Variablen setzen
            $_SESSION['username'] = $username;
            //Benutzer auf das adminpanel weiterleiten
            header("Location: adminpanel.php");

        //Ansonsten wieder zum Login    
        }else {
            header("Location: login.php");
        }
}
    //Funktion zum Ausloggen
    public function logout()
    {
        //Session beenden
        session_destroy();
        //Zurück zum Login
        header("Location: Login.php");
        //Aktuelles skript terminieren
        exit();
    }
    
}
