<?php

class Elternrat
{
    private $idelternrat;
    private $titel;
    private $person;

    public function __construct()
    {
    }

    public function getIdelternrat(): int
    {
        return $this->idelternrat;
}

    public function setIdelternrat(int $idelternrat): void
    {
        $this->idelternrat = $idelternrat;
    }

    public function getTitel(): string
    {
        return $this->titel;
    }

    public function setTitel(string $titel): void
    {
        $this->titel = $titel;
    }

    public function getPerson(): Person
    {
        return $this->person;
    }

    public function setPerson(Person $person): void
    {
        $this->person = $person;
    }
}

class Person
{
    private $idperson;

    public function __construct()
    {
    }

    public function getIdperson(): int
    {
        return $this->idperson;
    }

    public function setIdperson(int $idperson): void
    {
        $this->idperson = $idperson;
    }
}