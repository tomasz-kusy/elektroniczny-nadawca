<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing IsMiejscowaOutput
 */
class IsMiejscowaOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\IsMiejscowaOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\IsMiejscowaOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\IsMiejscowaOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\IsMiejscowaOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\IsMiejscowaOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\IsMiejscowaOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\IsMiejscowaOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\IsMiejscowaOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

