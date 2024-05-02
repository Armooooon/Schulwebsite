<?php
//Von Aron
require_once 'CLASS/class.php';

class ControllerFoerderverein {

    // Method to add an entry to the foerderverein table
    public static function addEntry($person_idperson, $status) {
        $sql = "INSERT INTO foerderverein (person_idperson, status) VALUES (?, ?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$person_idperson, $status]);
        return db::$pdo->lastInsertId();
    }

    // Method to update an entry in the foerderverein table
    public static function updateEntry($idfoerderverein, $person_idperson, $status) {
        $sql = "UPDATE foerderverein SET person_idperson = ?, status = ? WHERE idfoerderverein = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$person_idperson, $status, $idfoerderverein]);
    }

    // Method to delete an entry from the foerderverein table
    public static function deleteEntry($idfoerderverein) {
        $sql = "DELETE FROM foerderverein WHERE idfoerderverein = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$idfoerderverein]);
    }

    // Method to get an entry from the foerderverein table by its ID
    public static function getEntryById($idfoerderverein) {
        $sql = "SELECT * FROM foerderverein WHERE idfoerderverein = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$idfoerderverein]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    // Method to get all entries from the foerderverein table
    public static function getAllEntries() {
        $sql = "SELECT * FROM foerderverein";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
