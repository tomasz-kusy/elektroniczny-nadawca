<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetZapowiedziFakturInput
 */
class GetZapowiedziFakturInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetZapowiedziFakturInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetZapowiedziFakturInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetZapowiedziFakturInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetZapowiedziFakturInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetZapowiedziFakturInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetZapowiedziFakturInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetZapowiedziFakturInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetZapowiedziFakturInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

