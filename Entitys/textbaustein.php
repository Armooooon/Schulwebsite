<?php
class Textbaustein {
    private $idtextbaustein;
    private $text;
    private $person;

    public function getIdtextbaustein() {
        return $this->idtextbaustein;
    }

    public function setIdtextbaustein($idtextbaustein) {
        $this->idtextbaustein = $idtextbaustein;
    }

    public function getText() {
        return $this->text;
}

    public function setText($text) {
        $this->text = $text;
    }

    public function getPerson() {
        return $this->person;
    }

    public function setPerson(Person $person) {
        $this->person = $person;
    }
}