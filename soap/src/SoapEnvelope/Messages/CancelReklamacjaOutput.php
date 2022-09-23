<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing CancelReklamacjaOutput
 */
class CancelReklamacjaOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\CancelReklamacjaOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\CancelReklamacjaOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\CancelReklamacjaOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\CancelReklamacjaOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\CancelReklamacjaOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\CancelReklamacjaOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\CancelReklamacjaOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\CancelReklamacjaOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

