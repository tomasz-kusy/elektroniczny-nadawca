<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetWplatyCKPOutput
 */
class GetWplatyCKPOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetWplatyCKPOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetWplatyCKPOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetWplatyCKPOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetWplatyCKPOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetWplatyCKPOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetWplatyCKPOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetWplatyCKPOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetWplatyCKPOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

