<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing CreateEnvelopeBuforInput
 */
class CreateEnvelopeBuforInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\CreateEnvelopeBuforInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\CreateEnvelopeBuforInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\CreateEnvelopeBuforInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\CreateEnvelopeBuforInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\CreateEnvelopeBuforInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\CreateEnvelopeBuforInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\CreateEnvelopeBuforInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\CreateEnvelopeBuforInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

