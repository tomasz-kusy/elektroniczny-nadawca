<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetListaPowodowReklamacjiOutput
 */
class GetListaPowodowReklamacjiOutput
{

    /**
     * @var \TomaszKusy\En\GetListaPowodowReklamacjiResponse $getListaPowodowReklamacjiResponse
     */
    private $getListaPowodowReklamacjiResponse = null;

    /**
     * Gets as getListaPowodowReklamacjiResponse
     *
     * @return \TomaszKusy\En\GetListaPowodowReklamacjiResponse
     */
    public function getGetListaPowodowReklamacjiResponse()
    {
        return $this->getListaPowodowReklamacjiResponse;
    }

    /**
     * Sets a new getListaPowodowReklamacjiResponse
     *
     * @param \TomaszKusy\En\GetListaPowodowReklamacjiResponse $getListaPowodowReklamacjiResponse
     * @return self
     */
    public function setGetListaPowodowReklamacjiResponse(\TomaszKusy\En\GetListaPowodowReklamacjiResponse $getListaPowodowReklamacjiResponse)
    {
        $this->getListaPowodowReklamacjiResponse = $getListaPowodowReklamacjiResponse;
        return $this;
    }


}

