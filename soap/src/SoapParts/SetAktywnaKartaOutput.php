<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing SetAktywnaKartaOutput
 */
class SetAktywnaKartaOutput
{

    /**
     * @var \TomaszKusy\En\SetAktywnaKartaResponse $setAktywnaKartaResponse
     */
    private $setAktywnaKartaResponse = null;

    /**
     * Gets as setAktywnaKartaResponse
     *
     * @return \TomaszKusy\En\SetAktywnaKartaResponse
     */
    public function getSetAktywnaKartaResponse()
    {
        return $this->setAktywnaKartaResponse;
    }

    /**
     * Sets a new setAktywnaKartaResponse
     *
     * @param \TomaszKusy\En\SetAktywnaKartaResponse $setAktywnaKartaResponse
     * @return self
     */
    public function setSetAktywnaKartaResponse(\TomaszKusy\En\SetAktywnaKartaResponse $setAktywnaKartaResponse)
    {
        $this->setAktywnaKartaResponse = $setAktywnaKartaResponse;
        return $this;
    }


}

