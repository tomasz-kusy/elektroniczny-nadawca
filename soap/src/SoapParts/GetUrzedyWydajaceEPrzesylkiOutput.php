<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetUrzedyWydajaceEPrzesylkiOutput
 */
class GetUrzedyWydajaceEPrzesylkiOutput
{

    /**
     * @var \TomaszKusy\En\GetUrzedyWydajaceEPrzesylkiResponse $getUrzedyWydajaceEPrzesylkiResponse
     */
    private $getUrzedyWydajaceEPrzesylkiResponse = null;

    /**
     * Gets as getUrzedyWydajaceEPrzesylkiResponse
     *
     * @return \TomaszKusy\En\GetUrzedyWydajaceEPrzesylkiResponse
     */
    public function getGetUrzedyWydajaceEPrzesylkiResponse()
    {
        return $this->getUrzedyWydajaceEPrzesylkiResponse;
    }

    /**
     * Sets a new getUrzedyWydajaceEPrzesylkiResponse
     *
     * @param \TomaszKusy\En\GetUrzedyWydajaceEPrzesylkiResponse $getUrzedyWydajaceEPrzesylkiResponse
     * @return self
     */
    public function setGetUrzedyWydajaceEPrzesylkiResponse(\TomaszKusy\En\GetUrzedyWydajaceEPrzesylkiResponse $getUrzedyWydajaceEPrzesylkiResponse)
    {
        $this->getUrzedyWydajaceEPrzesylkiResponse = $getUrzedyWydajaceEPrzesylkiResponse;
        return $this;
    }


}

