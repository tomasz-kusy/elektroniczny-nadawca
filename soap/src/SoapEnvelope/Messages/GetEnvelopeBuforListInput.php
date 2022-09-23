<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetEnvelopeBuforListInput
 */
class GetEnvelopeBuforListInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetEnvelopeBuforListInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeBuforListInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetEnvelopeBuforListInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetEnvelopeBuforListInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetEnvelopeBuforListInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeBuforListInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeBuforListInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetEnvelopeBuforListInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

