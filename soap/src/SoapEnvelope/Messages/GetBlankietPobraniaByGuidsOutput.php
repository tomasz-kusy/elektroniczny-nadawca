<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetBlankietPobraniaByGuidsOutput
 */
class GetBlankietPobraniaByGuidsOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetBlankietPobraniaByGuidsOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetBlankietPobraniaByGuidsOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetBlankietPobraniaByGuidsOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetBlankietPobraniaByGuidsOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetBlankietPobraniaByGuidsOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetBlankietPobraniaByGuidsOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetBlankietPobraniaByGuidsOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetBlankietPobraniaByGuidsOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

