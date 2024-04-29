<?php
//Von Aron
require_once 'CLASS/class.php'; 
class ControllerTermin {
    public static function addTermin($von, $bis, $terminname) {
        $sql = "INSERT INTO termin (von, bis, terminname) VALUES (?, ?, ?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$von, $bis, $terminname]);
        return db::$pdo->lastInsertId();
    }

    public static function deleteTermin($idtermin) {
        $sql = "DELETE FROM termin WHERE idtermin = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$idtermin]);
    }

    public static function getTerminById($idtermin) {
        $sql = "SELECT * FROM termin WHERE idtermin = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$idtermin]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllTermine() {
        $sql = "SELECT * FROM termin";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
