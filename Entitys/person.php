<?php
class Person {
    private $idperson;
    private $vorname;
    private $nachname;
    private $adresse;
    private $personfunktion;

    public function getIdperson() {
        return $this->idperson;
    }

    public function setIdperson($idperson) {
        $this->idperson = $idperson;
    }

    public function getVorname() {
        return $this->vorname;
}

    public function setVorname($vorname) {
        $this->vorname = $vorname;
    }

    public function getNachname() {
        return $this->nachname;
    }

    public function setNachname($nachname) {
        $this->nachname = $nachname;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse(Adresse $adresse) {
        $this->adresse = $adresse;
    }

    public function getPersonfunktion() {
        return $this->personfunktion;
    }

    public function setPersonfunktion(Personfunktion $personfunktion) {
        $this->personfunktion = $personfunktion;
    }
}