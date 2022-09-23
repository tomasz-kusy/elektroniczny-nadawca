<?php

namespace TomaszKusy\En;

/**
 * Class representing ListWartosciowyKrajowyType
 *
 *
 * XSD Type: listWartosciowyKrajowyType
 */
class ListWartosciowyKrajowyType extends PrzesylkaRejestrowanaType
{

    /**
     * @var bool $posteRestante
     */
    private $posteRestante = null;

    /**
     * @var int $wartosc
     */
    private $wartosc = null;

    /**
     * @var int $iloscPotwierdzenOdbioru
     */
    private $iloscPotwierdzenOdbioru = null;

    /**
     * @var string $kategoria
     */
    private $kategoria = null;

    /**
     * Format przesyłki
     *
     * @var string $format
     */
    private $format = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var string $numerWewnetrznyPrzesylki
     */
    private $numerWewnetrznyPrzesylki = null;

    /**
     * @var bool $egzemplarzBiblioteczny
     */
    private $egzemplarzBiblioteczny = null;

    /**
     * @var bool $dlaOciemnialych
     */
    private $dlaOciemnialych = null;

    /**
     * Identifier library for legal deposit from
     *  list downloaded using the getLibrariesForLegalDeposits method
     *
     * @var string $idLibraryForLegalDeposit
     */
    private $idLibraryForLegalDeposit = null;

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
     * Gets as format
     *
     * Format przesyłki
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * Format przesyłki
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
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
     * Gets as numerWewnetrznyPrzesylki
     *
     * @return string
     */
    public function getNumerWewnetrznyPrzesylki()
    {
        return $this->numerWewnetrznyPrzesylki;
    }

    /**
     * Sets a new numerWewnetrznyPrzesylki
     *
     * @param string $numerWewnetrznyPrzesylki
     * @return self
     */
    public function setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki)
    {
        $this->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;
        return $this;
    }

    /**
     * Gets as egzemplarzBiblioteczny
     *
     * @return bool
     */
    public function getEgzemplarzBiblioteczny()
    {
        return $this->egzemplarzBiblioteczny;
    }

    /**
     * Sets a new egzemplarzBiblioteczny
     *
     * @param bool $egzemplarzBiblioteczny
     * @return self
     */
    public function setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
    {
        $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
        return $this;
    }

    /**
     * Gets as dlaOciemnialych
     *
     * @return bool
     */
    public function getDlaOciemnialych()
    {
        return $this->dlaOciemnialych;
    }

    /**
     * Sets a new dlaOciemnialych
     *
     * @param bool $dlaOciemnialych
     * @return self
     */
    public function setDlaOciemnialych($dlaOciemnialych)
    {
        $this->dlaOciemnialych = $dlaOciemnialych;
        return $this;
    }

    /**
     * Gets as idLibraryForLegalDeposit
     *
     * Identifier library for legal deposit from
     *  list downloaded using the getLibrariesForLegalDeposits method
     *
     * @return string
     */
    public function getIdLibraryForLegalDeposit()
    {
        return $this->idLibraryForLegalDeposit;
    }

    /**
     * Sets a new idLibraryForLegalDeposit
     *
     * Identifier library for legal deposit from
     *  list downloaded using the getLibrariesForLegalDeposits method
     *
     * @param string $idLibraryForLegalDeposit
     * @return self
     */
    public function setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
    {
        $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;
        return $this;
    }


}

