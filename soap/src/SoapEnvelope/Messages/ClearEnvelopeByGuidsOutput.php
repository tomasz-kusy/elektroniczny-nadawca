<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing ClearEnvelopeByGuidsOutput
 */
class ClearEnvelopeByGuidsOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\ClearEnvelopeByGuidsOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeByGuidsOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\ClearEnvelopeByGuidsOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\ClearEnvelopeByGuidsOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\ClearEnvelopeByGuidsOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeByGuidsOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeByGuidsOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeByGuidsOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

