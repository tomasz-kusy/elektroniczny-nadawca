<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetListaPowodowReklamacjiOutput
 */
class GetListaPowodowReklamacjiOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetListaPowodowReklamacjiOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetListaPowodowReklamacjiOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetListaPowodowReklamacjiOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetListaPowodowReklamacjiOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetListaPowodowReklamacjiOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetListaPowodowReklamacjiOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetListaPowodowReklamacjiOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetListaPowodowReklamacjiOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

