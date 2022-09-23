<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing ZamowKurieraOutput
 */
class ZamowKurieraOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\ZamowKurieraOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\ZamowKurieraOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\ZamowKurieraOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\ZamowKurieraOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\ZamowKurieraOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\ZamowKurieraOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\ZamowKurieraOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\ZamowKurieraOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

