<?php

class Essensplan
{
    private $idessensplan;
    private $von;
    private $bis;
    private $datei_iddatei;

    public function getIdessensplan()
    {
        return $this->idessensplan;
    }

    public function setIdessensplan($idessensplan)
    {
        $this->idessensplan = $idessensplan;
    }

    public function getVon()
    {
        return $this->von;
    }

    public function setVon($von)
    {
        $this->von = $von;
    }

    public function getBis()
    {
        return $this->bis;
    }

    public function setBis($bis)
    {
        $this->bis = $bis;
    }

    public function getDatei_iddatei()
    {
        return $this->datei_iddatei;
    }

    public function setDatei_iddatei($datei_iddatei)
    {
        $this->datei_iddatei = $datei_iddatei;
    }
}

