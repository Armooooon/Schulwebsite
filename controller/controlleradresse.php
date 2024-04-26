<?php
class controlleradresse {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Methode zum Abrufen aller Adressen
    public function getAllAdressen() {
        $sql = "SELECT idadresse, strasse, plz, ort FROM adresse";
        $statement = $this->pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Methode zum Hinzufügen einer Adresse
    public function addAdresse($strasse, $plz, $ort) {
        $sql = "INSERT INTO adresse (strasse, plz, ort) VALUES (?, ?, ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$strasse, $plz, $ort]);
        return $this->pdo->lastInsertId();
    }

    // Methode zum Aktualisieren einer Adresse
    public function updateAdresse($idadresse, $strasse, $plz, $ort) {
        $sql = "UPDATE adresse SET strasse=?, plz=?, ort=? WHERE idadresse=?";
        $statement = $this->pdo->prepare($sql);
        return $statement->execute([$strasse, $plz, $ort, $idadresse]);
    }

    // Methode zum Löschen einer Adresse
    public function deleteAdresse($idadresse) {
        $sql = "DELETE FROM adresse WHERE idadresse=?";
        $statement = $this->pdo->prepare($sql);
        return $statement->execute([$idadresse]);
    }
}
?>
