<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetEnvelopeContentFullOutput
 */
class GetEnvelopeContentFullOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetEnvelopeContentFullOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeContentFullOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetEnvelopeContentFullOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetEnvelopeContentFullOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetEnvelopeContentFullOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeContentFullOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeContentFullOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeContentFullOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

