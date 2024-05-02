<?php
//Von Aron
require_once 'CLASS/class.php'; 

class ControllerElternrat {

    // Method to add an entry in the elternrat table
    public static function addEntry($titel, $person_idperson) {
        $sql = "INSERT INTO elternrat (titel, person_idperson) VALUES (?, ?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$titel, $person_idperson]);
        return db::$pdo->lastInsertId();
    }

    // Method to update an entry in the elternrat table
    public static function updateEntry($idelternrat, $titel, $person_idperson) {
        $sql = "UPDATE elternrat SET titel = ?, person_idperson = ? WHERE idelternrat = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$titel, $person_idperson, $idelternrat]);
    }

    // Method to delete an entry from the elternrat table
    public static function deleteEntry($idelternrat) {
        $sql = "DELETE FROM elternrat WHERE idelternrat = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$idelternrat]);
    }

    // Method to get an entry from the elternrat table by its ID
    public static function getEntryById($idelternrat) {
        $sql = "SELECT * FROM elternrat WHERE idelternrat = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$idelternrat]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    // Method to get all entries from the elternrat table
    public static function getAllEntries() {
        $sql = "SELECT * FROM elternrat";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
