<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing SetStatusZgodyNaEZwrotInput
 */
class SetStatusZgodyNaEZwrotInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\SetStatusZgodyNaEZwrotInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\SetStatusZgodyNaEZwrotInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\SetStatusZgodyNaEZwrotInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\SetStatusZgodyNaEZwrotInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\SetStatusZgodyNaEZwrotInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\SetStatusZgodyNaEZwrotInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\SetStatusZgodyNaEZwrotInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\SetStatusZgodyNaEZwrotInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

