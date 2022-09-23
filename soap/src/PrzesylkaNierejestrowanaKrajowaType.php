<?php

namespace TomaszKusy\En;

/**
 * Class representing PrzesylkaNierejestrowanaKrajowaType
 *
 *
 * XSD Type: przesylkaNierejestrowanaKrajowaType
 */
class PrzesylkaNierejestrowanaKrajowaType extends PrzesylkaNieRejestrowanaType
{

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
     * @var bool $egzemplarzBiblioteczny
     */
    private $egzemplarzBiblioteczny = null;

    /**
     * Identifier library for legal deposit from
     *  list downloaded using the getLibrariesForLegalDeposits method
     *
     * @var string $idLibraryForLegalDeposit
     */
    private $idLibraryForLegalDeposit = null;

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

