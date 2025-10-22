<?php

namespace Entity;

class Kunde {

    private $id;
    private $vorname;
    private $nachname;
    private $strasse;
    private $nr;
    private $plz;
    private $ort;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getVorname()
    {
        return $this->vorname;
    }

    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
        return $this;
    }

    public function getNachname()
    {
        return $this->nachname;
    }

    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
        return $this;
    }

    public function getStrasse()
    {
        return $this->strasse;
    }

    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;
        return $this;
    }

    public function getNr()
    {
        return $this->nr;
    }

    public function setNr($nr)
    {
        $this->nr = $nr;
        return $this;
    }

    public function getPlz()
    {
        return $this->plz;
    }

    public function setPlz($plz)
    {
        $this->plz = $plz;
        return $this;
    }

    public function getOrt()
    {
        return $this->ort;
    }

    public function setOrt($ort)
    {
        $this->ort = $ort;
        return $this;
    }
}