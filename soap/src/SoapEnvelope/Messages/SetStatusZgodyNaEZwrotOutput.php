<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing SetStatusZgodyNaEZwrotOutput
 */
class SetStatusZgodyNaEZwrotOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\SetStatusZgodyNaEZwrotOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\SetStatusZgodyNaEZwrotOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\SetStatusZgodyNaEZwrotOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\SetStatusZgodyNaEZwrotOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\SetStatusZgodyNaEZwrotOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\SetStatusZgodyNaEZwrotOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\SetStatusZgodyNaEZwrotOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\SetStatusZgodyNaEZwrotOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

