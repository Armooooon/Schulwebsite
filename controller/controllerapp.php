<?php
//Von Aron
require_once 'CLASS/class.php';

Class controllerap {
    // Method to add an app
    public function addApp($datei_iddatei) {
        $sql = "INSERT INTO apps (datei_iddatei) VALUES (?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$datei_iddatei]);
        return db::$pdo->lastInsertId();
    }

    // Method to update an app
    public function updateApp($datei_iddatei) {
        $sql = "UPDATE apps SET datei_iddatei = ? WHERE datei_iddatei = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$datei_iddatei]);
    }

    // Method to delete an app
    public function deleteApp($datei_iddatei) {
        $sql = "DELETE FROM apps WHERE datei_iddatei = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$datei_iddatei]);
    }

    // Method to get an app by its file ID
    public function getAppByFileId($fileId) {
        $sql = "SELECT * FROM apps WHERE datei_iddatei = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$fileId]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    // Method to get all apps
    public function getAllApps() {
        $sql = "SELECT * FROM apps";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
