<?php
//Von Aron
require_once 'CLASS/class.php'; 

class ControllerPerson {

    // Method to add a person
    public static function addPerson($vorname, $nachname, $adresse_idadresse, $personfunktion_idpersonfunktion) {
        $sql = "INSERT INTO person (vorname, nachname, adresse_idadresse, personfunktion_idpersonfunktion) VALUES (?, ?, ?, ?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$vorname, $nachname, $adresse_idadresse, $personfunktion_idpersonfunktion]);
        return db::$pdo->lastInsertId();  
    }

    // Method to update a person
    public static function updatePerson($idperson, $vorname, $nachname, $adresse_idadresse, $personfunktion_idpersonfunktion) {
        $sql = "UPDATE person SET vorname = ?, nachname = ?, adresse_idadresse = ?, personfunktion_idpersonfunktion = ? WHERE idperson = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$vorname, $nachname, $adresse_idadresse, $personfunktion_idpersonfunktion, $idperson]);
    }

    // Method to delete a person
    public static function deletePerson($idperson) {
        $sql = "DELETE FROM person WHERE idperson = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$idperson]);
    }

    // Method to get a person by their ID
    public static function getPersonById($idperson) {
        $sql = "SELECT * FROM person WHERE idperson = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$idperson]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    // Method to get all persons
    public static function getAllPersons() {
        $sql = "SELECT * FROM person";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
