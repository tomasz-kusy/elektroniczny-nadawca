<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing UpdateEnvelopeBuforOutput
 */
class UpdateEnvelopeBuforOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\UpdateEnvelopeBuforOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\UpdateEnvelopeBuforOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\UpdateEnvelopeBuforOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\UpdateEnvelopeBuforOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\UpdateEnvelopeBuforOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\UpdateEnvelopeBuforOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\UpdateEnvelopeBuforOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\UpdateEnvelopeBuforOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

