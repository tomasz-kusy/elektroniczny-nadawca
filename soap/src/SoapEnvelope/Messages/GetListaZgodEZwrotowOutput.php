<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetListaZgodEZwrotowOutput
 */
class GetListaZgodEZwrotowOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetListaZgodEZwrotowOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetListaZgodEZwrotowOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetListaZgodEZwrotowOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetListaZgodEZwrotowOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetListaZgodEZwrotowOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetListaZgodEZwrotowOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetListaZgodEZwrotowOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetListaZgodEZwrotowOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

