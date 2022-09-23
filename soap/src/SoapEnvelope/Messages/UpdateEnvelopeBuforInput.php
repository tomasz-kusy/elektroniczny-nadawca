<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing UpdateEnvelopeBuforInput
 */
class UpdateEnvelopeBuforInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\UpdateEnvelopeBuforInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\UpdateEnvelopeBuforInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\UpdateEnvelopeBuforInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\UpdateEnvelopeBuforInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\UpdateEnvelopeBuforInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\UpdateEnvelopeBuforInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\UpdateEnvelopeBuforInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\UpdateEnvelopeBuforInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

