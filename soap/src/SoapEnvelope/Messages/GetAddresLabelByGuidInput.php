<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetAddresLabelByGuidInput
 */
class GetAddresLabelByGuidInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetAddresLabelByGuidInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetAddresLabelByGuidInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetAddresLabelByGuidInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetAddresLabelByGuidInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

