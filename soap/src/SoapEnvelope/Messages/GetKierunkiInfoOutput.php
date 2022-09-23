<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetKierunkiInfoOutput
 */
class GetKierunkiInfoOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetKierunkiInfoOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetKierunkiInfoOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetKierunkiInfoOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetKierunkiInfoOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetKierunkiInfoOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetKierunkiInfoOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetKierunkiInfoOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetKierunkiInfoOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

