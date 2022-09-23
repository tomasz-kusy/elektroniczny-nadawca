<?php

namespace TomaszKusy\En;

/**
 * Class representing ReklamowanaPrzesylkaType
 *
 *
 * XSD Type: reklamowanaPrzesylkaType
 */
class ReklamowanaPrzesylkaType
{

    /**
     * @var \DateTime $dataNadania
     */
    private $dataNadania = null;

    /**
     * @var int $urzadNadania
     */
    private $urzadNadania = null;

    /**
     * @var string $powodReklamacjiOpis
     */
    private $powodReklamacjiOpis = null;

    /**
     * @var int $odszkodowanie
     */
    private $odszkodowanie = null;

    /**
     * @var int $oplata
     */
    private $oplata = null;

    /**
     * @var int $oczekiwaneOdszkodowanie
     */
    private $oczekiwaneOdszkodowanie = null;

    /**
     * @var \TomaszKusy\En\PrzesylkaType $przesylka
     */
    private $przesylka = null;

    /**
     * @var \TomaszKusy\En\PowodReklamacjiType $powodReklamacji
     */
    private $powodReklamacji = null;

    /**
     * Gets as dataNadania
     *
     * @return \DateTime
     */
    public function getDataNadania()
    {
        return $this->dataNadania;
    }

    /**
     * Sets a new dataNadania
     *
     * @param \DateTime $dataNadania
     * @return self
     */
    public function setDataNadania(\DateTime $dataNadania)
    {
        $this->dataNadania = $dataNadania;
        return $this;
    }

    /**
     * Gets as urzadNadania
     *
     * @return int
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Sets a new urzadNadania
     *
     * @param int $urzadNadania
     * @return self
     */
    public function setUrzadNadania($urzadNadania)
    {
        $this->urzadNadania = $urzadNadania;
        return $this;
    }

    /**
     * Gets as powodReklamacjiOpis
     *
     * @return string
     */
    public function getPowodReklamacjiOpis()
    {
        return $this->powodReklamacjiOpis;
    }

    /**
     * Sets a new powodReklamacjiOpis
     *
     * @param string $powodReklamacjiOpis
     * @return self
     */
    public function setPowodReklamacjiOpis($powodReklamacjiOpis)
    {
        $this->powodReklamacjiOpis = $powodReklamacjiOpis;
        return $this;
    }

    /**
     * Gets as odszkodowanie
     *
     * @return int
     */
    public function getOdszkodowanie()
    {
        return $this->odszkodowanie;
    }

    /**
     * Sets a new odszkodowanie
     *
     * @param int $odszkodowanie
     * @return self
     */
    public function setOdszkodowanie($odszkodowanie)
    {
        $this->odszkodowanie = $odszkodowanie;
        return $this;
    }

    /**
     * Gets as oplata
     *
     * @return int
     */
    public function getOplata()
    {
        return $this->oplata;
    }

    /**
     * Sets a new oplata
     *
     * @param int $oplata
     * @return self
     */
    public function setOplata($oplata)
    {
        $this->oplata = $oplata;
        return $this;
    }

    /**
     * Gets as oczekiwaneOdszkodowanie
     *
     * @return int
     */
    public function getOczekiwaneOdszkodowanie()
    {
        return $this->oczekiwaneOdszkodowanie;
    }

    /**
     * Sets a new oczekiwaneOdszkodowanie
     *
     * @param int $oczekiwaneOdszkodowanie
     * @return self
     */
    public function setOczekiwaneOdszkodowanie($oczekiwaneOdszkodowanie)
    {
        $this->oczekiwaneOdszkodowanie = $oczekiwaneOdszkodowanie;
        return $this;
    }

    /**
     * Gets as przesylka
     *
     * @return \TomaszKusy\En\PrzesylkaType
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * Sets a new przesylka
     *
     * @param \TomaszKusy\En\PrzesylkaType $przesylka
     * @return self
     */
    public function setPrzesylka(\TomaszKusy\En\PrzesylkaType $przesylka)
    {
        $this->przesylka = $przesylka;
        return $this;
    }

    /**
     * Gets as powodReklamacji
     *
     * @return \TomaszKusy\En\PowodReklamacjiType
     */
    public function getPowodReklamacji()
    {
        return $this->powodReklamacji;
    }

    /**
     * Sets a new powodReklamacji
     *
     * @param \TomaszKusy\En\PowodReklamacjiType $powodReklamacji
     * @return self
     */
    public function setPowodReklamacji(\TomaszKusy\En\PowodReklamacjiType $powodReklamacji)
    {
        $this->powodReklamacji = $powodReklamacji;
        return $this;
    }


}

