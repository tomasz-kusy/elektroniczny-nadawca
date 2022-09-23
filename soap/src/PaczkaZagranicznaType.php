<?php

namespace TomaszKusy\En;

/**
 * Class representing PaczkaZagranicznaType
 *
 *
 * XSD Type: paczkaZagranicznaType
 */
class PaczkaZagranicznaType extends PrzesylkaRejestrowanaType
{

    /**
     * @var bool $posteRestante
     */
    private $posteRestante = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var int $wartosc
     */
    private $wartosc = null;

    /**
     * @var string $kategoria
     */
    private $kategoria = null;

    /**
     * @var int $iloscPotwierdzenOdbioru
     */
    private $iloscPotwierdzenOdbioru = null;

    /**
     * @var bool $utrudnionaManipulacja
     */
    private $utrudnionaManipulacja = null;

    /**
     * @var bool $ekspres
     */
    private $ekspres = null;

    /**
     * atrybut przestarzały (deprecated), należy
     *  używać typu
     *  deklaracjaCelna2Type i elementu
     *  numerReferencyjnyCelny
     *
     * @var string $numerReferencyjnyCelny
     */
    private $numerReferencyjnyCelny = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    private $numerPrzesylkiKlienta = null;

    /**
     * @var \TomaszKusy\En\ZwrotType $zwrot
     */
    private $zwrot = null;

    /**
     * @var \TomaszKusy\En\DeklaracjaCelnaType $deklaracjaCelna
     */
    private $deklaracjaCelna = null;

    /**
     * @var \TomaszKusy\En\DeklaracjaCelna2Type $deklaracjaCelna2
     */
    private $deklaracjaCelna2 = null;

    /**
     * @var string $sposobNadaniaInterconnect
     */
    private $sposobNadaniaInterconnect = null;

    /**
     * @var \TomaszKusy\En\SposobDoreczeniaType $sposobDoreczenia
     */
    private $sposobDoreczenia = null;

    /**
     * Gets as posteRestante
     *
     * @return bool
     */
    public function getPosteRestante()
    {
        return $this->posteRestante;
    }

    /**
     * Sets a new posteRestante
     *
     * @param bool $posteRestante
     * @return self
     */
    public function setPosteRestante($posteRestante)
    {
        $this->posteRestante = $posteRestante;
        return $this;
    }

    /**
     * Gets as masa
     *
     * @return int
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Sets a new masa
     *
     * @param int $masa
     * @return self
     */
    public function setMasa($masa)
    {
        $this->masa = $masa;
        return $this;
    }

    /**
     * Gets as wartosc
     *
     * @return int
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Sets a new wartosc
     *
     * @param int $wartosc
     * @return self
     */
    public function setWartosc($wartosc)
    {
        $this->wartosc = $wartosc;
        return $this;
    }

    /**
     * Gets as kategoria
     *
     * @return string
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Sets a new kategoria
     *
     * @param string $kategoria
     * @return self
     */
    public function setKategoria($kategoria)
    {
        $this->kategoria = $kategoria;
        return $this;
    }

    /**
     * Gets as iloscPotwierdzenOdbioru
     *
     * @return int
     */
    public function getIloscPotwierdzenOdbioru()
    {
        return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * Sets a new iloscPotwierdzenOdbioru
     *
     * @param int $iloscPotwierdzenOdbioru
     * @return self
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
    {
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        return $this;
    }

    /**
     * Gets as utrudnionaManipulacja
     *
     * @return bool
     */
    public function getUtrudnionaManipulacja()
    {
        return $this->utrudnionaManipulacja;
    }

    /**
     * Sets a new utrudnionaManipulacja
     *
     * @param bool $utrudnionaManipulacja
     * @return self
     */
    public function setUtrudnionaManipulacja($utrudnionaManipulacja)
    {
        $this->utrudnionaManipulacja = $utrudnionaManipulacja;
        return $this;
    }

    /**
     * Gets as ekspres
     *
     * @return bool
     */
    public function getEkspres()
    {
        return $this->ekspres;
    }

    /**
     * Sets a new ekspres
     *
     * @param bool $ekspres
     * @return self
     */
    public function setEkspres($ekspres)
    {
        $this->ekspres = $ekspres;
        return $this;
    }

    /**
     * Gets as numerReferencyjnyCelny
     *
     * atrybut przestarzały (deprecated), należy
     *  używać typu
     *  deklaracjaCelna2Type i elementu
     *  numerReferencyjnyCelny
     *
     * @return string
     */
    public function getNumerReferencyjnyCelny()
    {
        return $this->numerReferencyjnyCelny;
    }

    /**
     * Sets a new numerReferencyjnyCelny
     *
     * atrybut przestarzały (deprecated), należy
     *  używać typu
     *  deklaracjaCelna2Type i elementu
     *  numerReferencyjnyCelny
     *
     * @param string $numerReferencyjnyCelny
     * @return self
     */
    public function setNumerReferencyjnyCelny($numerReferencyjnyCelny)
    {
        $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;
        return $this;
    }

    /**
     * Gets as numerPrzesylkiKlienta
     *
     * @return string
     */
    public function getNumerPrzesylkiKlienta()
    {
        return $this->numerPrzesylkiKlienta;
    }

    /**
     * Sets a new numerPrzesylkiKlienta
     *
     * @param string $numerPrzesylkiKlienta
     * @return self
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        return $this;
    }

    /**
     * Gets as zwrot
     *
     * @return \TomaszKusy\En\ZwrotType
     */
    public function getZwrot()
    {
        return $this->zwrot;
    }

    /**
     * Sets a new zwrot
     *
     * @param \TomaszKusy\En\ZwrotType $zwrot
     * @return self
     */
    public function setZwrot(\TomaszKusy\En\ZwrotType $zwrot)
    {
        $this->zwrot = $zwrot;
        return $this;
    }

    /**
     * Gets as deklaracjaCelna
     *
     * @return \TomaszKusy\En\DeklaracjaCelnaType
     */
    public function getDeklaracjaCelna()
    {
        return $this->deklaracjaCelna;
    }

    /**
     * Sets a new deklaracjaCelna
     *
     * @param \TomaszKusy\En\DeklaracjaCelnaType $deklaracjaCelna
     * @return self
     */
    public function setDeklaracjaCelna(\TomaszKusy\En\DeklaracjaCelnaType $deklaracjaCelna)
    {
        $this->deklaracjaCelna = $deklaracjaCelna;
        return $this;
    }

    /**
     * Gets as deklaracjaCelna2
     *
     * @return \TomaszKusy\En\DeklaracjaCelna2Type
     */
    public function getDeklaracjaCelna2()
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * Sets a new deklaracjaCelna2
     *
     * @param \TomaszKusy\En\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return self
     */
    public function setDeklaracjaCelna2(\TomaszKusy\En\DeklaracjaCelna2Type $deklaracjaCelna2)
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;
        return $this;
    }

    /**
     * Gets as sposobNadaniaInterconnect
     *
     * @return string
     */
    public function getSposobNadaniaInterconnect()
    {
        return $this->sposobNadaniaInterconnect;
    }

    /**
     * Sets a new sposobNadaniaInterconnect
     *
     * @param string $sposobNadaniaInterconnect
     * @return self
     */
    public function setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
    {
        $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;
        return $this;
    }

    /**
     * Gets as sposobDoreczenia
     *
     * @return \TomaszKusy\En\SposobDoreczeniaType
     */
    public function getSposobDoreczenia()
    {
        return $this->sposobDoreczenia;
    }

    /**
     * Sets a new sposobDoreczenia
     *
     * @param \TomaszKusy\En\SposobDoreczeniaType $sposobDoreczenia
     * @return self
     */
    public function setSposobDoreczenia(\TomaszKusy\En\SposobDoreczeniaType $sposobDoreczenia)
    {
        $this->sposobDoreczenia = $sposobDoreczenia;
        return $this;
    }


}

