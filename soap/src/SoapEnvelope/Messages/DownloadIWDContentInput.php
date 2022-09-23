<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing DownloadIWDContentInput
 */
class DownloadIWDContentInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\DownloadIWDContentInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\DownloadIWDContentInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\DownloadIWDContentInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\DownloadIWDContentInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\DownloadIWDContentInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\DownloadIWDContentInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\DownloadIWDContentInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\DownloadIWDContentInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

