<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetUrzedyWydajaceEPrzesylkiInput
 */
class GetUrzedyWydajaceEPrzesylkiInput
{

    /**
     * @var \TomaszKusy\En\GetUrzedyWydajaceEPrzesylki $getUrzedyWydajaceEPrzesylki
     */
    private $getUrzedyWydajaceEPrzesylki = null;

    /**
     * Gets as getUrzedyWydajaceEPrzesylki
     *
     * @return \TomaszKusy\En\GetUrzedyWydajaceEPrzesylki
     */
    public function getGetUrzedyWydajaceEPrzesylki()
    {
        return $this->getUrzedyWydajaceEPrzesylki;
    }

    /**
     * Sets a new getUrzedyWydajaceEPrzesylki
     *
     * @param \TomaszKusy\En\GetUrzedyWydajaceEPrzesylki $getUrzedyWydajaceEPrzesylki
     * @return self
     */
    public function setGetUrzedyWydajaceEPrzesylki(\TomaszKusy\En\GetUrzedyWydajaceEPrzesylki $getUrzedyWydajaceEPrzesylki)
    {
        $this->getUrzedyWydajaceEPrzesylki = $getUrzedyWydajaceEPrzesylki;
        return $this;
    }


}

