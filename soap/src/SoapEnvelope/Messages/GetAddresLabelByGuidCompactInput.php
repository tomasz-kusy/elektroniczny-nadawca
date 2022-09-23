<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetAddresLabelByGuidCompactInput
 */
class GetAddresLabelByGuidCompactInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetAddresLabelByGuidCompactInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidCompactInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetAddresLabelByGuidCompactInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetAddresLabelByGuidCompactInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetAddresLabelByGuidCompactInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidCompactInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidCompactInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidCompactInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

