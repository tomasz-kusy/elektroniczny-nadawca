<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing AddReklamacjeInput
 */
class AddReklamacjeInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\AddReklamacjeInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\AddReklamacjeInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\AddReklamacjeInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\AddReklamacjeInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\AddReklamacjeInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\AddReklamacjeInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\AddReklamacjeInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\AddReklamacjeInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

