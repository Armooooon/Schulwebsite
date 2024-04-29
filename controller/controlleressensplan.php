<?php

require_once 'CLASS/class.php'; // Assuming the file containing the db class is named class.php

class ControllerEssensplan {

    // Method to add an entry to the essensplan table
    public static function addEntry($von, $bis, $datei_iddatei) {
        $sql = "INSERT INTO essensplan (von, bis, datei_iddatei) VALUES (?, ?, ?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$von, $bis, $datei_iddatei]);
        return db::$pdo->lastInsertId();
    }

    // Method to update an entry in the essensplan table
    public static function updateEntry($idessensplan, $von, $bis, $datei_iddatei) {
        $sql = "UPDATE essensplan SET von = ?, bis = ?, datei_iddatei = ? WHERE idessensplan = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$von, $bis, $datei_iddatei, $idessensplan]);
    }

    // Method to delete an entry from the essensplan table
    public static function deleteEntry($idessensplan) {
        $sql = "DELETE FROM essensplan WHERE idessensplan = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$idessensplan]);
    }

    // Method to get an entry from the essensplan table by its ID
    public static function getEntryById($idessensplan) {
        $sql = "SELECT * FROM essensplan WHERE idessensplan = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$idessensplan]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    // Method to get all entries from the essensplan table
    public static function getAllEntries() {
        $sql = "SELECT * FROM essensplan";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
