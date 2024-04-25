<?php

class Datei {
    private $iddatei;
    private $dateiname;
    private $dateipfad;
    private $hochgeladenAm;
    private $benutzerIdbenutzer;

public function __construct($dateiname, $dateipfad, $hochgeladenAm, $benutzerIdbenutzer) {
        $this->dateiname = $dateiname;
        $this->dateipfad = $dateipfad;
        $this->hochgeladenAm = $hochgeladenAm;
        $this->benutzerIdbenutzer = $benutzerIdbenutzer;
    }

    public function getIddatei() {
        return $this->iddatei;
    }

    public function setIddatei($iddatei) {
        $this->iddatei = $iddatei;
    }

    public function getDateiname() {
        return $this->dateiname;
    }

    public function setDateiname($dateiname) {
        $this->dateiname = $dateiname;
    }

    public function getDateipfad() {
        return $this->dateipfad;
    }

    public function setDateipfad($dateipfad) {
        $this->dateipfad = $dateipfad;
    }

    public function getHochgeladenAm() {
        return $this->hochgeladenAm;
    }

    public function setHochgeladenAm($hochgeladenAm) {
        $this->hochgeladenAm = $hochgeladenAm;
    }

    public function getBenutzerIdbenutzer() {
        return $this->benutzerIdbenutzer;
    }

    public function setBenutzerIdbenutzer($benutzerIdbenutzer) {
        $this->benutzerIdbenutzer = $benutzerIdbenutzer;
    }
}