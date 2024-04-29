<?php
//Von Aron
require_once 'CLASS/class.php'; // Assuming the file containing the db class is named class.php

class controllerbenutzer {

    // Method to add a user
    public static function addBenutzer($benutzername, $password, $person_idperson) {
        $sql = "INSERT INTO benutzer (benutzername, password, person_idperson) VALUES (?, ?, ?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$benutzername, $password, $person_idperson]);
        return db::$pdo->lastInsertId();
    }

    // Method to update a user
    public static function updateBenutzer($idbenutzer, $benutzername, $password, $person_idperson) {
        $sql = "UPDATE benutzer SET benutzername = ?, password = ?, person_idperson = ? WHERE idbenutzer = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$benutzername, $password, $person_idperson, $idbenutzer]);
    }

    // Method to delete a user
    public static function deleteBenutzer($idbenutzer) {
        $sql = "DELETE FROM benutzer WHERE idbenutzer = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$idbenutzer]);
    }

    // Method to get a user by their ID
    public static function getBenutzerById($idbenutzer) {
        $sql = "SELECT * FROM benutzer WHERE idbenutzer = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$idbenutzer]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    // Method to get all users
    public static function getAllBenutzer() {
        $sql = "SELECT * FROM benutzer";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
