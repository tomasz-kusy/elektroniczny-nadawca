<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing AddZalacznikDoReklamacjiInput
 */
class AddZalacznikDoReklamacjiInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\AddZalacznikDoReklamacjiInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\AddZalacznikDoReklamacjiInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\AddZalacznikDoReklamacjiInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\AddZalacznikDoReklamacjiInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\AddZalacznikDoReklamacjiInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\AddZalacznikDoReklamacjiInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\AddZalacznikDoReklamacjiInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\AddZalacznikDoReklamacjiInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

