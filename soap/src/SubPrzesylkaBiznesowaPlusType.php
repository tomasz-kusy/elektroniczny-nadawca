<?php

namespace TomaszKusy\En;

/**
 * Class representing SubPrzesylkaBiznesowaPlusType
 *
 *
 * XSD Type: subPrzesylkaBiznesowaPlusType
 */
class SubPrzesylkaBiznesowaPlusType extends PrzesylkaType
{

    /**
     * @var string $numerNadania
     */
    private $numerNadania = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var string $gabaryt
     */
    private $gabaryt = null;

    /**
     * @var int $wartosc
     */
    private $wartosc = null;

    /**
     * @var bool $ostroznie
     */
    private $ostroznie = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    private $numerPrzesylkiKlienta = null;

    /**
     * @var int $kwotaTranzakcji
     */
    private $kwotaTranzakcji = null;

    /**
     * @var string $numerTransakcjiOdbioru
     */
    private $numerTransakcjiOdbioru = null;

    /**
     * @var \TomaszKusy\En\PobranieType $pobranie
     */
    private $pobranie = null;

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
     * Gets as kwotaTranzakcji
     *
     * @return int
     */
    public function getKwotaTranzakcji()
    {
        return $this->kwotaTranzakcji;
    }

    /**
     * Sets a new kwotaTranzakcji
     *
     * @param int $kwotaTranzakcji
     * @return self
     */
    public function setKwotaTranzakcji($kwotaTranzakcji)
    {
        $this->kwotaTranzakcji = $kwotaTranzakcji;
        return $this;
    }

    /**
     * Gets as numerTransakcjiOdbioru
     *
     * @return string
     */
    public function getNumerTransakcjiOdbioru()
    {
        return $this->numerTransakcjiOdbioru;
    }

    /**
     * Sets a new numerTransakcjiOdbioru
     *
     * @param string $numerTransakcjiOdbioru
     * @return self
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
    {
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
        return $this;
    }

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


}

