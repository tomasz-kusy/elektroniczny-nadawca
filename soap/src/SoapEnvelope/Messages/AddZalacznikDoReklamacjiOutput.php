<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing AddZalacznikDoReklamacjiOutput
 */
class AddZalacznikDoReklamacjiOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\AddZalacznikDoReklamacjiOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\AddZalacznikDoReklamacjiOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\AddZalacznikDoReklamacjiOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\AddZalacznikDoReklamacjiOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\AddZalacznikDoReklamacjiOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\AddZalacznikDoReklamacjiOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\AddZalacznikDoReklamacjiOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\AddZalacznikDoReklamacjiOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

