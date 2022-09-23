<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetWplatyCKPInput
 */
class GetWplatyCKPInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetWplatyCKPInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetWplatyCKPInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetWplatyCKPInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetWplatyCKPInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetWplatyCKPInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetWplatyCKPInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetWplatyCKPInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetWplatyCKPInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

