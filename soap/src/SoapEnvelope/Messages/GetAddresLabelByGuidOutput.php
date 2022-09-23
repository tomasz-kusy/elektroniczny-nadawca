<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetAddresLabelByGuidOutput
 */
class GetAddresLabelByGuidOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetAddresLabelByGuidOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetAddresLabelByGuidOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetAddresLabelByGuidOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetAddresLabelByGuidOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelByGuidOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

