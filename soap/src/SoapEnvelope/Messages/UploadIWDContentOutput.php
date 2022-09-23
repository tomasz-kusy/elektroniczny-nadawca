<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing UploadIWDContentOutput
 */
class UploadIWDContentOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\UploadIWDContentOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\UploadIWDContentOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\UploadIWDContentOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\UploadIWDContentOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\UploadIWDContentOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\UploadIWDContentOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\UploadIWDContentOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\UploadIWDContentOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

