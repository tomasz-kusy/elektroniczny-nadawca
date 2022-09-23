<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetPaczkaKorzysciInfoOutput
 */
class GetPaczkaKorzysciInfoOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetPaczkaKorzysciInfoOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetPaczkaKorzysciInfoOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetPaczkaKorzysciInfoOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetPaczkaKorzysciInfoOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetPaczkaKorzysciInfoOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetPaczkaKorzysciInfoOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetPaczkaKorzysciInfoOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetPaczkaKorzysciInfoOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

