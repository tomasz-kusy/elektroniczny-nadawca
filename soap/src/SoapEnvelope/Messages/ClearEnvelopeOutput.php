<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing ClearEnvelopeOutput
 */
class ClearEnvelopeOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\ClearEnvelopeOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\ClearEnvelopeOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\ClearEnvelopeOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\ClearEnvelopeOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

