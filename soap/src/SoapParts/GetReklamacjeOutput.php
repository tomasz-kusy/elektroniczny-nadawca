<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetReklamacjeOutput
 */
class GetReklamacjeOutput
{

    /**
     * @var \TomaszKusy\En\GetReklamacjeResponse $getReklamacjeResponse
     */
    private $getReklamacjeResponse = null;

    /**
     * Gets as getReklamacjeResponse
     *
     * @return \TomaszKusy\En\GetReklamacjeResponse
     */
    public function getGetReklamacjeResponse()
    {
        return $this->getReklamacjeResponse;
    }

    /**
     * Sets a new getReklamacjeResponse
     *
     * @param \TomaszKusy\En\GetReklamacjeResponse $getReklamacjeResponse
     * @return self
     */
    public function setGetReklamacjeResponse(\TomaszKusy\En\GetReklamacjeResponse $getReklamacjeResponse)
    {
        $this->getReklamacjeResponse = $getReklamacjeResponse;
        return $this;
    }


}

