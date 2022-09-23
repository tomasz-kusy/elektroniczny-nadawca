<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing ZamowKurieraInput
 */
class ZamowKurieraInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\ZamowKurieraInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\ZamowKurieraInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\ZamowKurieraInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\ZamowKurieraInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\ZamowKurieraInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\ZamowKurieraInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\ZamowKurieraInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\ZamowKurieraInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

