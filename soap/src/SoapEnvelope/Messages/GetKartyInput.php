<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetKartyInput
 */
class GetKartyInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetKartyInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetKartyInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetKartyInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetKartyInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetKartyInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetKartyInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetKartyInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetKartyInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

