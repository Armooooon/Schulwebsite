<?php
class Personfunktion {
    private $idpersonfunktion;
    private $funktion;

    public function getIdpersonfunktion() {
        return $this->idpersonfunktion;
    }

    public function setIdpersonfunktion($idpersonfunktion) {
        $this->idpersonfunktion = $idpersonfunktion;
    }

    public function getFunktion() {
        return $this->funktion;
}

    public function setFunktion($funktion) {
        $this->funktion = $funktion;
    }
}