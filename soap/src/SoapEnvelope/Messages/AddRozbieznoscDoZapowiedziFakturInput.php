<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing AddRozbieznoscDoZapowiedziFakturInput
 */
class AddRozbieznoscDoZapowiedziFakturInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\AddRozbieznoscDoZapowiedziFakturInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\AddRozbieznoscDoZapowiedziFakturInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\AddRozbieznoscDoZapowiedziFakturInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\AddRozbieznoscDoZapowiedziFakturInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\AddRozbieznoscDoZapowiedziFakturInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\AddRozbieznoscDoZapowiedziFakturInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\AddRozbieznoscDoZapowiedziFakturInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\AddRozbieznoscDoZapowiedziFakturInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

