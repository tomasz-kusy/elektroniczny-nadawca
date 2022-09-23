<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing CancelReklamacjaInput
 */
class CancelReklamacjaInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\CancelReklamacjaInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\CancelReklamacjaInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\CancelReklamacjaInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\CancelReklamacjaInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\CancelReklamacjaInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\CancelReklamacjaInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\CancelReklamacjaInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\CancelReklamacjaInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

