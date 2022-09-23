<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing CreateEnvelopeBuforOutput
 */
class CreateEnvelopeBuforOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\CreateEnvelopeBuforOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\CreateEnvelopeBuforOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\CreateEnvelopeBuforOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\CreateEnvelopeBuforOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\CreateEnvelopeBuforOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\CreateEnvelopeBuforOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\CreateEnvelopeBuforOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\CreateEnvelopeBuforOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

