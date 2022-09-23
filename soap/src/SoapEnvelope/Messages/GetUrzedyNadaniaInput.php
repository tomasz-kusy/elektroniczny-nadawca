<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetUrzedyNadaniaInput
 */
class GetUrzedyNadaniaInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetUrzedyNadaniaInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyNadaniaInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetUrzedyNadaniaInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetUrzedyNadaniaInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetUrzedyNadaniaInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyNadaniaInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyNadaniaInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyNadaniaInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

