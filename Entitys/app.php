<?php

class App {
    private $datei_iddatei;

    public function __construct($datei_iddatei = null) {
        $this->datei_iddatei = $datei_iddatei;
    }

    public function getDateiIddatei() {
        return $this->datei_iddatei;
    }

    public function setDateiIddatei($datei_iddatei) {
        $this->datei_iddatei = $datei_iddatei;
    }
}