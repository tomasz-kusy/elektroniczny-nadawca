<?php

namespace TomaszKusy\En;

/**
 * Class representing SubPocztex2021Type
 *
 *
 * XSD Type: subPocztex2021Type
 */
class SubPocztex2021Type extends PrzesylkaType
{

    /**
     * @var \TomaszKusy\En\PobranieType $pobranie
     */
    private $pobranie = null;

    /**
     * @var \TomaszKusy\En\UbezpieczenieType $ubezpieczenie
     */
    private $ubezpieczenie = null;

    /**
     * @var string $numerNadania
     */
    private $numerNadania = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var int $wartosc
     */
    private $wartosc = null;

    /**
     * @var bool $ostroznie
     */
    private $ostroznie = null;

    /**
     * @var bool $ponadgabaryt
     */
    private $ponadgabaryt = null;

    /**
     * @var string $format
     */
    private $format = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    private $numerPrzesylkiKlienta = null;

    /**
     * Gets as pobranie
     *
     * @return \TomaszKusy\En\PobranieType
     */
    public function getPobranie()
    {
        return $this->pobranie;
    }

    /**
     * Sets a new pobranie
     *
     * @param \TomaszKusy\En\PobranieType $pobranie
     * @return self
     */
    public function setPobranie(\TomaszKusy\En\PobranieType $pobranie)
    {
        $this->pobranie = $pobranie;
        return $this;
    }

    /**
     * Gets as ubezpieczenie
     *
     * @return \TomaszKusy\En\UbezpieczenieType
     */
    public function getUbezpieczenie()
    {
        return $this->ubezpieczenie;
    }

    /**
     * Sets a new ubezpieczenie
     *
     * @param \TomaszKusy\En\UbezpieczenieType $ubezpieczenie
     * @return self
     */
    public function setUbezpieczenie(\TomaszKusy\En\UbezpieczenieType $ubezpieczenie)
    {
        $this->ubezpieczenie = $ubezpieczenie;
        return $this;
    }

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;
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
     * Gets as ostroznie
     *
     * @return bool
     */
    public function getOstroznie()
    {
        return $this->ostroznie;
    }

    /**
     * Sets a new ostroznie
     *
     * @param bool $ostroznie
     * @return self
     */
    public function setOstroznie($ostroznie)
    {
        $this->ostroznie = $ostroznie;
        return $this;
    }

    /**
     * Gets as ponadgabaryt
     *
     * @return bool
     */
    public function getPonadgabaryt()
    {
        return $this->ponadgabaryt;
    }

    /**
     * Sets a new ponadgabaryt
     *
     * @param bool $ponadgabaryt
     * @return self
     */
    public function setPonadgabaryt($ponadgabaryt)
    {
        $this->ponadgabaryt = $ponadgabaryt;
        return $this;
    }

    /**
     * Gets as format
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
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
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


}

