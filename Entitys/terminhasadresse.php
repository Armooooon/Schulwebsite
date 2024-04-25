<?php
class Schulsprecher {
    private $idSchulsprecher;
    private $schulsprecherKlasse;
    private $person;

    public function getIdSchulsprecher() {
        return $this->idSchulsprecher;
    }

    public function setIdSchulsprecher($idSchulsprecher) {
        $this->idSchulsprecher = $idSchulsprecher;
   }

    public function getSchulsprecherKlasse() {
        return $this->schulsprecherKlasse;
    }

    public function setSchulsprecherKlasse($schulsprecherKlasse) {
        $this->schulsprecherKlasse = $schulsprecherKlasse;
    }

    public function getPerson() {
        return $this->person;
    }

    public function setPerson(Person $person) {
        $this->person = $person;
    }
}