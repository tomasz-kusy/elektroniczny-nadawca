<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing AddReklamacjeOutput
 */
class AddReklamacjeOutput
{

    /**
     * @var \TomaszKusy\En\AddReklamacjeResponse $addReklamacjeResponse
     */
    private $addReklamacjeResponse = null;

    /**
     * Gets as addReklamacjeResponse
     *
     * @return \TomaszKusy\En\AddReklamacjeResponse
     */
    public function getAddReklamacjeResponse()
    {
        return $this->addReklamacjeResponse;
    }

    /**
     * Sets a new addReklamacjeResponse
     *
     * @param \TomaszKusy\En\AddReklamacjeResponse $addReklamacjeResponse
     * @return self
     */
    public function setAddReklamacjeResponse(\TomaszKusy\En\AddReklamacjeResponse $addReklamacjeResponse)
    {
        $this->addReklamacjeResponse = $addReklamacjeResponse;
        return $this;
    }


}

