<?php
//Von Aron
require_once 'CLASS/class.php'; 

class ControllerMesse {
    public static function addMesse() {
        $sql = "INSERT INTO messe () VALUES ()";
        $statement = db::$pdo->prepare($sql);
        $statement->execute();
        return db::$pdo->lastInsertId();
    }

    public static function deleteMesse($idmesse) {
        $sql = "DELETE FROM messe WHERE idmesse = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$idmesse]);
    }

    public static function getMesseById($idmesse) {
        $sql = "SELECT * FROM messe WHERE idmesse = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$idmesse]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllMesses() {
        $sql = "SELECT * FROM messe";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
