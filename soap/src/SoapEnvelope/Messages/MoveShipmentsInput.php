<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing MoveShipmentsInput
 */
class MoveShipmentsInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\MoveShipmentsInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\MoveShipmentsInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\MoveShipmentsInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\MoveShipmentsInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\MoveShipmentsInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\MoveShipmentsInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\MoveShipmentsInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\MoveShipmentsInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

