<?php

namespace TomaszKusy\En;

/**
 * Class representing ListZwyklyFirmowyType
 *
 *
 * XSD Type: listZwyklyFirmowyType
 */
class ListZwyklyFirmowyType extends PrzesylkaNieRejestrowanaType
{

    /**
     * @var bool $posteRestante
     */
    private $posteRestante = null;

    /**
     * @var bool $miejscowa
     */
    private $miejscowa = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var bool $egzemplarzBiblioteczny
     */
    private $egzemplarzBiblioteczny = null;

    /**
     * @var bool $dlaOciemnialych
     */
    private $dlaOciemnialych = null;

    /**
     * @var bool $obszarMiasto
     */
    private $obszarMiasto = null;

    /**
     * @var string $kategoria
     */
    private $kategoria = null;

    /**
     * @var string $gabaryt
     */
    private $gabaryt = null;

    /**
     * @var \TomaszKusy\En\AdresType $adres
     */
    private $adres = null;

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
     * Gets as miejscowa
     *
     * @return bool
     */
    public function getMiejscowa()
    {
        return $this->miejscowa;
    }

    /**
     * Sets a new miejscowa
     *
     * @param bool $miejscowa
     * @return self
     */
    public function setMiejscowa($miejscowa)
    {
        $this->miejscowa = $miejscowa;
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
     * Gets as obszarMiasto
     *
     * @return bool
     */
    public function getObszarMiasto()
    {
        return $this->obszarMiasto;
    }

    /**
     * Sets a new obszarMiasto
     *
     * @param bool $obszarMiasto
     * @return self
     */
    public function setObszarMiasto($obszarMiasto)
    {
        $this->obszarMiasto = $obszarMiasto;
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
     * Gets as gabaryt
     *
     * @return string
     */
    public function getGabaryt()
    {
        return $this->gabaryt;
    }

    /**
     * Sets a new gabaryt
     *
     * @param string $gabaryt
     * @return self
     */
    public function setGabaryt($gabaryt)
    {
        $this->gabaryt = $gabaryt;
        return $this;
    }

    /**
     * Gets as adres
     *
     * @return \TomaszKusy\En\AdresType
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \TomaszKusy\En\AdresType $adres
     * @return self
     */
    public function setAdres(\TomaszKusy\En\AdresType $adres)
    {
        $this->adres = $adres;
        return $this;
    }


}

