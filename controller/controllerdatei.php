<?php
//Von Aron
require_once 'CLASS/class.php'; //For the Pdo

class DateiController {

    // Method to add a file
    public static function addDatei($dateiname, $dateipfad, $hochgeladen_am, $benutzer_idbenutzer) {
        $sql = "INSERT INTO datei (dateiname, dateipfad, hochgeladen_am, benutzer_idbenutzer) VALUES (?, ?, ?, ?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$dateiname, $dateipfad, $hochgeladen_am, $benutzer_idbenutzer]);
        return db::$pdo->lastInsertId();
    }

    // Method to update a file
    public static function updateDatei($iddatei, $dateiname, $dateipfad, $hochgeladen_am, $benutzer_idbenutzer) {
        $sql = "UPDATE datei SET dateiname = ?, dateipfad = ?, hochgeladen_am = ?, benutzer_idbenutzer = ? WHERE iddatei = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$dateiname, $dateipfad, $hochgeladen_am, $benutzer_idbenutzer, $iddatei]);
    }

    // Method to delete a file
    public static function deleteDatei($iddatei) {
        $sql = "DELETE FROM datei WHERE iddatei = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$iddatei]);
    }

    // Method to get a file by its ID
    public static function getDateiById($iddatei) {
        $sql = "SELECT * FROM datei WHERE iddatei = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$iddatei]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    // Method to get all files
    public static function getAllDatei() {
        $sql = "SELECT * FROM datei";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
