<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing DownloadIWDContentOutput
 */
class DownloadIWDContentOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\DownloadIWDContentOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\DownloadIWDContentOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\DownloadIWDContentOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\DownloadIWDContentOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\DownloadIWDContentOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\DownloadIWDContentOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\DownloadIWDContentOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\DownloadIWDContentOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

