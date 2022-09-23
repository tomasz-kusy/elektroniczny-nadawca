<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing AddOdwolanieDoReklamacjiOutput
 */
class AddOdwolanieDoReklamacjiOutput
{

    /**
     * @var \TomaszKusy\En\AddOdwolanieDoReklamacjiResponse $addOdwolanieDoReklamacjiResponse
     */
    private $addOdwolanieDoReklamacjiResponse = null;

    /**
     * Gets as addOdwolanieDoReklamacjiResponse
     *
     * @return \TomaszKusy\En\AddOdwolanieDoReklamacjiResponse
     */
    public function getAddOdwolanieDoReklamacjiResponse()
    {
        return $this->addOdwolanieDoReklamacjiResponse;
    }

    /**
     * Sets a new addOdwolanieDoReklamacjiResponse
     *
     * @param \TomaszKusy\En\AddOdwolanieDoReklamacjiResponse $addOdwolanieDoReklamacjiResponse
     * @return self
     */
    public function setAddOdwolanieDoReklamacjiResponse(\TomaszKusy\En\AddOdwolanieDoReklamacjiResponse $addOdwolanieDoReklamacjiResponse)
    {
        $this->addOdwolanieDoReklamacjiResponse = $addOdwolanieDoReklamacjiResponse;
        return $this;
    }


}

