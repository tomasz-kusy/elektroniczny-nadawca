<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetAddresLabelCompactOutput
 */
class GetAddresLabelCompactOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetAddresLabelCompactOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelCompactOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetAddresLabelCompactOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetAddresLabelCompactOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetAddresLabelCompactOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelCompactOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelCompactOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetAddresLabelCompactOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

