<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing AddRozbieznoscDoZapowiedziFakturOutput
 */
class AddRozbieznoscDoZapowiedziFakturOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\AddRozbieznoscDoZapowiedziFakturOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\AddRozbieznoscDoZapowiedziFakturOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\AddRozbieznoscDoZapowiedziFakturOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\AddRozbieznoscDoZapowiedziFakturOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\AddRozbieznoscDoZapowiedziFakturOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\AddRozbieznoscDoZapowiedziFakturOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\AddRozbieznoscDoZapowiedziFakturOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\AddRozbieznoscDoZapowiedziFakturOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

