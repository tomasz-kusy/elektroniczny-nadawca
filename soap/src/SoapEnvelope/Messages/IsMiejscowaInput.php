<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing IsMiejscowaInput
 */
class IsMiejscowaInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\IsMiejscowaInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\IsMiejscowaInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\IsMiejscowaInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\IsMiejscowaInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\IsMiejscowaInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\IsMiejscowaInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\IsMiejscowaInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\IsMiejscowaInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

