<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing CancelReklamacjaOutput
 */
class CancelReklamacjaOutput
{

    /**
     * @var \TomaszKusy\En\CancelReklamacjaResponse $cancelReklamacjaResponse
     */
    private $cancelReklamacjaResponse = null;

    /**
     * Gets as cancelReklamacjaResponse
     *
     * @return \TomaszKusy\En\CancelReklamacjaResponse
     */
    public function getCancelReklamacjaResponse()
    {
        return $this->cancelReklamacjaResponse;
    }

    /**
     * Sets a new cancelReklamacjaResponse
     *
     * @param \TomaszKusy\En\CancelReklamacjaResponse $cancelReklamacjaResponse
     * @return self
     */
    public function setCancelReklamacjaResponse(\TomaszKusy\En\CancelReklamacjaResponse $cancelReklamacjaResponse)
    {
        $this->cancelReklamacjaResponse = $cancelReklamacjaResponse;
        return $this;
    }


}

