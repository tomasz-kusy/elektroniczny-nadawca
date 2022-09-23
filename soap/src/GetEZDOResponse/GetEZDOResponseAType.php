<?php

namespace TomaszKusy\En\GetEZDOResponse;

/**
 * Class representing GetEZDOResponseAType
 */
class GetEZDOResponseAType
{

    /**
     * @var string $numerKD
     */
    private $numerKD = null;

    /**
     * @var string $numerEZDO
     */
    private $numerEZDO = null;

    /**
     * @var \TomaszKusy\En\AdresType $adres
     */
    private $adres = null;

    /**
     * @var \TomaszKusy\En\EZDOPrzesylkaType[] $przesylka
     */
    private $przesylka = [
        
    ];

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Gets as numerKD
     *
     * @return string
     */
    public function getNumerKD()
    {
        return $this->numerKD;
    }

    /**
     * Sets a new numerKD
     *
     * @param string $numerKD
     * @return self
     */
    public function setNumerKD($numerKD)
    {
        $this->numerKD = $numerKD;
        return $this;
    }

    /**
     * Gets as numerEZDO
     *
     * @return string
     */
    public function getNumerEZDO()
    {
        return $this->numerEZDO;
    }

    /**
     * Sets a new numerEZDO
     *
     * @param string $numerEZDO
     * @return self
     */
    public function setNumerEZDO($numerEZDO)
    {
        $this->numerEZDO = $numerEZDO;
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

    /**
     * Adds as przesylka
     *
     * @return self
     * @param \TomaszKusy\En\EZDOPrzesylkaType $przesylka
     */
    public function addToPrzesylka(\TomaszKusy\En\EZDOPrzesylkaType $przesylka)
    {
        $this->przesylka[] = $przesylka;
        return $this;
    }

    /**
     * isset przesylka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrzesylka($index)
    {
        return isset($this->przesylka[$index]);
    }

    /**
     * unset przesylka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrzesylka($index)
    {
        unset($this->przesylka[$index]);
    }

    /**
     * Gets as przesylka
     *
     * @return \TomaszKusy\En\EZDOPrzesylkaType[]
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * Sets a new przesylka
     *
     * @param \TomaszKusy\En\EZDOPrzesylkaType[] $przesylka
     * @return self
     */
    public function setPrzesylka(array $przesylka)
    {
        $this->przesylka = $przesylka;
        return $this;
    }

    /**
     * Adds as error
     *
     * @return self
     * @param \TomaszKusy\En\ErrorType $error
     */
    public function addToError(\TomaszKusy\En\ErrorType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return \TomaszKusy\En\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \TomaszKusy\En\ErrorType[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }


}

