<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetBlankietPobraniaByGuidsInput
 */
class GetBlankietPobraniaByGuidsInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetBlankietPobraniaByGuidsInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetBlankietPobraniaByGuidsInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetBlankietPobraniaByGuidsInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetBlankietPobraniaByGuidsInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetBlankietPobraniaByGuidsInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetBlankietPobraniaByGuidsInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetBlankietPobraniaByGuidsInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetBlankietPobraniaByGuidsInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

