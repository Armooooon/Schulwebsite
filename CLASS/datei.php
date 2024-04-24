<?php
class datei {
    private $iddatei;
    private $dateiname;
    private $dateipfad;
    private $hochgeladen_am;
    private $benutzer_idbenutzer;
    
    function __construct($iddatei, $dateiname, $dateipfad, $hochgeladen_am, $benutzer_idbenutzer) {
        $this->iddatei = $iddatei;
        $this->dateiname = $dateiname;
        $this->dateipfad = $dateipfad;
        $this->hochgeladen_am = $hochgeladen_am;
        $this->benutzer_idbenutzer = $benutzer_idbenutzer;
        
        
    }
    
    function getIddatei() {
        return $this->iddatei;
    }

    function getDateiname() {
        return $this->dateiname;
    }

    function getDateipfad() {
        return $this->dateipfad;
    }

    function getHochgeladen_am() {
        return $this->hochgeladen_am;
    }

    function getBenutzer_idbenutzer() {
        return $this->benutzer_idbenutzer;
    }

    function setIddatei($iddatei): void {
        $this->iddatei = $iddatei;
    }

    function setDateiname($dateiname): void {
        $this->dateiname = $dateiname;
    }

    function setDateipfad($dateipfad): void {
        $this->dateipfad = $dateipfad;
    }

    function setHochgeladen_am($hochgeladen_am): void {
        $this->hochgeladen_am = $hochgeladen_am;
    }

    function setBenutzer_idbenutzer($benutzer_idbenutzer): void {
        $this->benutzer_idbenutzer = $benutzer_idbenutzer;
    }

    

}