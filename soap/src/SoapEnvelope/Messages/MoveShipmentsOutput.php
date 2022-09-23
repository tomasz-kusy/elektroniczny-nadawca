<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing MoveShipmentsOutput
 */
class MoveShipmentsOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\MoveShipmentsOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\MoveShipmentsOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\MoveShipmentsOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\MoveShipmentsOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\MoveShipmentsOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\MoveShipmentsOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\MoveShipmentsOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\MoveShipmentsOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

