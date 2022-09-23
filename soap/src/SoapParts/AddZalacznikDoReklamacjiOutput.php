<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing AddZalacznikDoReklamacjiOutput
 */
class AddZalacznikDoReklamacjiOutput
{

    /**
     * @var \TomaszKusy\En\AddZalacznikDoReklamacjiResponse $addZalacznikDoReklamacjiResponse
     */
    private $addZalacznikDoReklamacjiResponse = null;

    /**
     * Gets as addZalacznikDoReklamacjiResponse
     *
     * @return \TomaszKusy\En\AddZalacznikDoReklamacjiResponse
     */
    public function getAddZalacznikDoReklamacjiResponse()
    {
        return $this->addZalacznikDoReklamacjiResponse;
    }

    /**
     * Sets a new addZalacznikDoReklamacjiResponse
     *
     * @param \TomaszKusy\En\AddZalacznikDoReklamacjiResponse $addZalacznikDoReklamacjiResponse
     * @return self
     */
    public function setAddZalacznikDoReklamacjiResponse(\TomaszKusy\En\AddZalacznikDoReklamacjiResponse $addZalacznikDoReklamacjiResponse)
    {
        $this->addZalacznikDoReklamacjiResponse = $addZalacznikDoReklamacjiResponse;
        return $this;
    }


}

