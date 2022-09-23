<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetPaczkaKorzysciInfoInput
 */
class GetPaczkaKorzysciInfoInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetPaczkaKorzysciInfoInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetPaczkaKorzysciInfoInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetPaczkaKorzysciInfoInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetPaczkaKorzysciInfoInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetPaczkaKorzysciInfoInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetPaczkaKorzysciInfoInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetPaczkaKorzysciInfoInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetPaczkaKorzysciInfoInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

