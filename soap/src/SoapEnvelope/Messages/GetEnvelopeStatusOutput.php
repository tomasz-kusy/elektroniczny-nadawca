<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetEnvelopeStatusOutput
 */
class GetEnvelopeStatusOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetEnvelopeStatusOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeStatusOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetEnvelopeStatusOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetEnvelopeStatusOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetEnvelopeStatusOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeStatusOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeStatusOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeStatusOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

