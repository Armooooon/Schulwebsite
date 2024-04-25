<?php 
class Termin {
    private $idtermin;
    private $von;
    private $bis;
    private $terminname;

    public function getIdtermin() {
        return $this->idtermin;
}

    public function setIdtermin($idtermin) {
        $this->idtermin = $idtermin;
    }

    public function getVon() {
        return $this->von;
    }

    public function setVon(\DateTime $von) {
        $this->von = $von;
    }

    public function getBis() {
        return $this->bis;
    }

    public function setBis(\DateTime $bis = null) {
        $this->bis = $bis;
    }

    public function getTerminname() {
        return $this->terminname;
    }

    public function setTerminname($terminname) {
        $this->terminname = $terminname;
    }
}