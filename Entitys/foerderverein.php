<?php
class Foerderverein {
    private $idfoerderverein;
    private $person;
    private $status;

    public function getIdfoerderverein() {
        return $this->idfoerderverein;
    }

    public function setIdfoerderverein($idfoerderverein) {
        $this->idfoerderverein = $idfoerderverein;
    }

    public function getPerson() {
        return $this->person;
    }

    public function setPerson(Person $person) {
        $this->person = $person;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        if (!in_array($status, ['Mitglied', 'Vorstand'])) {
            throw new InvalidArgumentException('Invalid status');
        }
        $this->status = $status;
    }
}