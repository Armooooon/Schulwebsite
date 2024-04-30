<?php
class Benutzer {
    private $idbenutzer;
    private $benutzername;
    private $password;
    private $person;

    public function getIdbenutzer() {
        return $this->idbenutzer;
    }


    public function getBenutzername() {
        return $this->benutzername;
    }

    public function setBenutzername($benutzername) {
        $this->benutzername = $benutzername;
    }

    public function getPassword() {
        return $this->password;
}

    public function setPassword($password) {
        $this->password = md5($password);
        //$this->password = $password;
    }

    public function getPerson() {
        return $this->person;
    }

    public function setPerson(Person $person) {
        $this->person = $person;
    }
}