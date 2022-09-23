<?php

namespace TomaszKusy\En;

/**
 * Class representing PrzesylkaNieRejestrowanaType
 *
 *
 * XSD Type: przesylkaNieRejestrowanaType
 */
class PrzesylkaNieRejestrowanaType extends PrzesylkaType
{

    /**
     * @var int $ilosc
     */
    private $ilosc = null;

    /**
     * Gets as ilosc
     *
     * @return int
     */
    public function getIlosc()
    {
        return $this->ilosc;
    }

    /**
     * Sets a new ilosc
     *
     * @param int $ilosc
     * @return self
     */
    public function setIlosc($ilosc)
    {
        $this->ilosc = $ilosc;
        return $this;
    }


}

