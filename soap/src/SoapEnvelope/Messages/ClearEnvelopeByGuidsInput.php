<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing ClearEnvelopeByGuidsInput
 */
class ClearEnvelopeByGuidsInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\ClearEnvelopeByGuidsInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeByGuidsInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\ClearEnvelopeByGuidsInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\ClearEnvelopeByGuidsInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\ClearEnvelopeByGuidsInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeByGuidsInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeByGuidsInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeByGuidsInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

