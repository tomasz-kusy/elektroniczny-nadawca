<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetUrzedyNadaniaOutput
 */
class GetUrzedyNadaniaOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetUrzedyNadaniaOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyNadaniaOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetUrzedyNadaniaOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetUrzedyNadaniaOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetUrzedyNadaniaOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyNadaniaOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyNadaniaOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyNadaniaOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

