class person {
    $idPerson;
    $vorname;
    $nachname;
    $adresse;
    $personfunktion;

    function _construct($vorname, $nachname, $adresse, $personfunktion) {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this-adresse = $adresse;
        $this->personfunktion = $personfunktion;
    }

    static function Add($vorname, $nachname, $adresse, $personfunktion) {
        $stmt = db::$pdo->prepare("INSERT INTO person () VALUES (:vorname, :nachname, :adresse, :personfunktion)");
        $stmt->bindParam(":vorname", $vorname);
        $stmt->bindParam(":nachname", $nachname);
        $stmt->bindParam(":adresse", $adresse->idAdresse);
        $stmt->bindParam(":personfunktion", $personfunktion->idPersonfunktion);

        $stmt->execute();

        return new person($vorname, $nachname, $adresse, $personfunktion);
    }

    function save() {
        $stmt = db::$pdo->prepare("UPDATE person SET vorname = :vorname, nachname = :nachname, adresse = :adresse, personenfunktion = :personenfunktion WHERE idPerson = :idPerson")
        $stmt->bindParam(":idPerson", $this->idPerson)
        $stmt->bindParam(":vorname", $this->vorname);
        //...

        $stmt->execute();
    }

    static function getById($idPerson) {
        $stmt = db::$pdo->prepare("SELECT * FROM person WHERE idPerson = :idPerson");
        $stmt->bindParam(":idPerson", $idPerson);
        $stmt->execute();

        $person = null;
        while ($row = $stmt->fetch()) {
            $adresse = Adresse::getById($row["adresse_idadresse"]);
            $personfunktion = Personfunktion::getById($row["personenfunktion_idpersonenfunktion"]);

            $person = new person($row["vorname"], $row["nachname"], $adresse, $personfunktion);
        }

        return $person;
    }

    
}