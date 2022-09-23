<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing SendEnvelopeOutput
 */
class SendEnvelopeOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\SendEnvelopeOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\SendEnvelopeOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\SendEnvelopeOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\SendEnvelopeOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\SendEnvelopeOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\SendEnvelopeOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\SendEnvelopeOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\SendEnvelopeOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

