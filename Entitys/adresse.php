<?php
class Adresse {
    private $idadresse;
    private $strasse;
    private $plz;
    private $ort;

    public function getIdadresse() {
        return $this->idadresse;
    }

    public function setIdadresse($idadresse) {
        $this->idadresse = $idadresse;
    }

    public function getStrasse() {
        return $this->strasse;
}

    public function setStrasse($strasse) {
        $this->strasse = $strasse;
    }

    public function getPlz() {
        return $this->plz;
    }

    public function setPlz($plz) {
        $this->plz = $plz;
    }

    public function getOrt() {
        return $this->ort;
    }

    public function setOrt($ort) {
        $this->ort = $ort;
    }
}