<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing AddReklamacjeOutput
 */
class AddReklamacjeOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\AddReklamacjeOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\AddReklamacjeOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\AddReklamacjeOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\AddReklamacjeOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\AddReklamacjeOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\AddReklamacjeOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\AddReklamacjeOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\AddReklamacjeOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

