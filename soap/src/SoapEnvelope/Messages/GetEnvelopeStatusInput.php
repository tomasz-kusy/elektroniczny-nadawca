<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetEnvelopeStatusInput
 */
class GetEnvelopeStatusInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetEnvelopeStatusInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeStatusInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetEnvelopeStatusInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetEnvelopeStatusInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetEnvelopeStatusInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeStatusInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeStatusInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeStatusInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

