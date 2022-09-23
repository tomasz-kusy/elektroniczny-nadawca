<?php

namespace TomaszKusy\En\AddShipment;

/**
 * Class representing AddShipmentAType
 */
class AddShipmentAType
{

    /**
     * @var \TomaszKusy\En\PrzesylkaType[] $przesylki
     */
    private $przesylki = [
        
    ];

    /**
     * @var int $idBufor
     */
    private $idBufor = null;

    /**
     * Adds as przesylki
     *
     * @return self
     * @param \TomaszKusy\En\PrzesylkaType $przesylki
     */
    public function addToPrzesylki(\TomaszKusy\En\PrzesylkaType $przesylki)
    {
        $this->przesylki[] = $przesylki;
        return $this;
    }

    /**
     * isset przesylki
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrzesylki($index)
    {
        return isset($this->przesylki[$index]);
    }

    /**
     * unset przesylki
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrzesylki($index)
    {
        unset($this->przesylki[$index]);
    }

    /**
     * Gets as przesylki
     *
     * @return \TomaszKusy\En\PrzesylkaType[]
     */
    public function getPrzesylki()
    {
        return $this->przesylki;
    }

    /**
     * Sets a new przesylki
     *
     * @param \TomaszKusy\En\PrzesylkaType[] $przesylki
     * @return self
     */
    public function setPrzesylki(array $przesylki)
    {
        $this->przesylki = $przesylki;
        return $this;
    }

    /**
     * Gets as idBufor
     *
     * @return int
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Sets a new idBufor
     *
     * @param int $idBufor
     * @return self
     */
    public function setIdBufor($idBufor)
    {
        $this->idBufor = $idBufor;
        return $this;
    }


}

