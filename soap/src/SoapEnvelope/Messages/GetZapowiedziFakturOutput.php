<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetZapowiedziFakturOutput
 */
class GetZapowiedziFakturOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetZapowiedziFakturOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetZapowiedziFakturOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetZapowiedziFakturOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetZapowiedziFakturOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetZapowiedziFakturOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetZapowiedziFakturOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetZapowiedziFakturOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetZapowiedziFakturOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

