<?php

namespace TomaszKusy\En;

/**
 * Class representing Pocztex2021NaDzisType
 *
 *
 * XSD Type: pocztex2021NaDzisType
 */
class Pocztex2021NaDzisType extends Pocztex2021Type
{

    /**
     * @var \TomaszKusy\En\SubPocztex2021NaDzisType[] $subPrzesylka
     */
    private $subPrzesylka = [
        
    ];

    /**
     * @var int $odleglosc
     */
    private $odleglosc = null;

    /**
     * @var string $obszar
     */
    private $obszar = null;

    /**
     * Adds as subPrzesylka
     *
     * @return self
     * @param \TomaszKusy\En\SubPocztex2021NaDzisType $subPrzesylka
     */
    public function addToSubPrzesylka(\TomaszKusy\En\SubPocztex2021NaDzisType $subPrzesylka)
    {
        $this->subPrzesylka[] = $subPrzesylka;
        return $this;
    }

    /**
     * isset subPrzesylka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubPrzesylka($index)
    {
        return isset($this->subPrzesylka[$index]);
    }

    /**
     * unset subPrzesylka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubPrzesylka($index)
    {
        unset($this->subPrzesylka[$index]);
    }

    /**
     * Gets as subPrzesylka
     *
     * @return \TomaszKusy\En\SubPocztex2021NaDzisType[]
     */
    public function getSubPrzesylka()
    {
        return $this->subPrzesylka;
    }

    /**
     * Sets a new subPrzesylka
     *
     * @param \TomaszKusy\En\SubPocztex2021NaDzisType[] $subPrzesylka
     * @return self
     */
    public function setSubPrzesylka(array $subPrzesylka)
    {
        $this->subPrzesylka = $subPrzesylka;
        return $this;
    }

    /**
     * Gets as odleglosc
     *
     * @return int
     */
    public function getOdleglosc()
    {
        return $this->odleglosc;
    }

    /**
     * Sets a new odleglosc
     *
     * @param int $odleglosc
     * @return self
     */
    public function setOdleglosc($odleglosc)
    {
        $this->odleglosc = $odleglosc;
        return $this;
    }

    /**
     * Gets as obszar
     *
     * @return string
     */
    public function getObszar()
    {
        return $this->obszar;
    }

    /**
     * Sets a new obszar
     *
     * @param string $obszar
     * @return self
     */
    public function setObszar($obszar)
    {
        $this->obszar = $obszar;
        return $this;
    }


}

