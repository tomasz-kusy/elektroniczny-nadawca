<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetListaPowodowReklamacjiInput
 */
class GetListaPowodowReklamacjiInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetListaPowodowReklamacjiInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetListaPowodowReklamacjiInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetListaPowodowReklamacjiInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetListaPowodowReklamacjiInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetListaPowodowReklamacjiInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetListaPowodowReklamacjiInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetListaPowodowReklamacjiInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetListaPowodowReklamacjiInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

