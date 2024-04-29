<?php
//Von Aron
require_once 'CLASS/class.php'; 
class ControllerMesseTermin {
    public static function addMesseTermin($messe_id, $termin_id) {
        $sql = "INSERT INTO messe_has_termin (messe_idmesse, termin_idtermin) VALUES (?, ?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$messe_id, $termin_id]);
        return true;
    }

    public static function deleteMesseTermin($messe_id, $termin_id) {
        $sql = "DELETE FROM messe_has_termin WHERE messe_idmesse = ? AND termin_idtermin = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$messe_id, $termin_id]);
    }

    public static function getTermineForMesse($messe_id) {
        $sql = "SELECT termin.* FROM termin
                INNER JOIN messe_has_termin ON termin.idtermin = messe_has_termin.termin_idtermin
                WHERE messe_has_termin.messe_idmesse = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$messe_id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getMessesForTermin($termin_id) {
        $sql = "SELECT messe.* FROM messe
                INNER JOIN messe_has_termin ON messe.idmesse = messe_has_termin.messe_idmesse
                WHERE messe_has_termin.termin_idtermin = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$termin_id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}