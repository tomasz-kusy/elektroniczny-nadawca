<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetKierunkiInfoInput
 */
class GetKierunkiInfoInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetKierunkiInfoInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetKierunkiInfoInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetKierunkiInfoInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetKierunkiInfoInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetKierunkiInfoInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetKierunkiInfoInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetKierunkiInfoInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetKierunkiInfoInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

