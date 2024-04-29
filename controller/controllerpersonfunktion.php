<?php
//Von Aron
require_once 'CLASS/class.php'; // Assuming the file containing the db class is named class.php

class ControllerPersonfunktion {

    // Method to add a function entry
    public static function addFunction($funktion) {
        $sql = "INSERT INTO personfunktion (funktion) VALUES (?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$funktion]);
        return db::$pdo->lastInsertId();
    }

    // Method to update a function entry
    public static function updateFunction($idpersonfunktion, $funktion) {
        $sql = "UPDATE personfunktion SET funktion = ? WHERE idpersonfunktion = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$funktion, $idpersonfunktion]);
    }

    // Method to delete a function entry
    public static function deleteFunction($idpersonfunktion) {
        $sql = "DELETE FROM personfunktion WHERE idpersonfunktion = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$idpersonfunktion]);
    }

    // Method to get a function entry by its ID
    public static function getFunctionById($idpersonfunktion) {
        $sql = "SELECT * FROM personfunktion WHERE idpersonfunktion = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$idpersonfunktion]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    // Method to get all function entries
    public static function getAllFunctions() {
        $sql = "SELECT * FROM personfunktion";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
