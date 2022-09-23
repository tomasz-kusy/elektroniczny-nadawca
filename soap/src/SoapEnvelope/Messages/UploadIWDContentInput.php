<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing UploadIWDContentInput
 */
class UploadIWDContentInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\UploadIWDContentInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\UploadIWDContentInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\UploadIWDContentInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\UploadIWDContentInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\UploadIWDContentInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\UploadIWDContentInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\UploadIWDContentInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\UploadIWDContentInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

