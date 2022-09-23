<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetListaZgodEZwrotowInput
 */
class GetListaZgodEZwrotowInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetListaZgodEZwrotowInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetListaZgodEZwrotowInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetListaZgodEZwrotowInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetListaZgodEZwrotowInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetListaZgodEZwrotowInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetListaZgodEZwrotowInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetListaZgodEZwrotowInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetListaZgodEZwrotowInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

