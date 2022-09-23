<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing ClearEnvelopeInput
 */
class ClearEnvelopeInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\ClearEnvelopeInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\ClearEnvelopeInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\ClearEnvelopeInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\ClearEnvelopeInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\ClearEnvelopeInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

