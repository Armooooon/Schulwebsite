<?php
//Von Aron
require_once 'CLASS/class.php';
class controlleradresse {

    // Methode zum Abrufen aller Adressen
    public function getAllAdressen() {
        $sql = "SELECT idadresse, strasse, plz, ort FROM adresse";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Methode zum Hinzufügen einer Adresse
    public function addAdresse($strasse, $plz, $ort) {
        $sql = "INSERT INTO adresse (strasse, plz, ort) VALUES (?, ?, ?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$strasse, $plz, $ort]);
        return db::$pdo->lastInsertId();
    }

    // Methode zum Aktualisieren einer Adresse
    public function updateAdresse($idadresse, $strasse, $plz, $ort) {
        $sql = "UPDATE adresse SET strasse=?, plz=?, ort=? WHERE idadresse=?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$strasse, $plz, $ort, $idadresse]);
    }

    // Methode zum Löschen einer Adresse
    public function deleteAdresse($idadresse) {
        $sql = "DELETE FROM adresse WHERE idadresse=?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$idadresse]);
    }

       // Methode zum Abrufen einer Adresse anhand der ID
       public function getAdresseById($id) {
        $sql = "SELECT idadresse, strasse, plz, ort FROM adresse WHERE idadresse=?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    
}
?>
