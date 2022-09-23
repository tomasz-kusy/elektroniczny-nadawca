<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing ZamowKurieraInput
 */
class ZamowKurieraInput
{

    /**
     * @var \TomaszKusy\En\ZamowKuriera $zamowKuriera
     */
    private $zamowKuriera = null;

    /**
     * Gets as zamowKuriera
     *
     * @return \TomaszKusy\En\ZamowKuriera
     */
    public function getZamowKuriera()
    {
        return $this->zamowKuriera;
    }

    /**
     * Sets a new zamowKuriera
     *
     * @param \TomaszKusy\En\ZamowKuriera $zamowKuriera
     * @return self
     */
    public function setZamowKuriera(\TomaszKusy\En\ZamowKuriera $zamowKuriera)
    {
        $this->zamowKuriera = $zamowKuriera;
        return $this;
    }


}

