<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing ZamowKurieraOutput
 */
class ZamowKurieraOutput
{

    /**
     * @var \TomaszKusy\En\ZamowKurieraResponse $zamowKurieraResponse
     */
    private $zamowKurieraResponse = null;

    /**
     * Gets as zamowKurieraResponse
     *
     * @return \TomaszKusy\En\ZamowKurieraResponse
     */
    public function getZamowKurieraResponse()
    {
        return $this->zamowKurieraResponse;
    }

    /**
     * Sets a new zamowKurieraResponse
     *
     * @param \TomaszKusy\En\ZamowKurieraResponse $zamowKurieraResponse
     * @return self
     */
    public function setZamowKurieraResponse(\TomaszKusy\En\ZamowKurieraResponse $zamowKurieraResponse)
    {
        $this->zamowKurieraResponse = $zamowKurieraResponse;
        return $this;
    }


}

