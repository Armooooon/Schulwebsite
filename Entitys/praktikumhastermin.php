<?php 
class PraktikumHasTermin {
    private $praktikum;
    private $termin;

    public function getPraktikum() {
        return $this->praktikum;
    }

    public function setPraktikum(Praktikum $praktikum) {
        $this->praktikum = $praktikum;
    }

    public function getTermin() {
        return $this->termin;
}

    public function setTermin(Termin $termin) {
        $this->termin = $termin;
    }
}