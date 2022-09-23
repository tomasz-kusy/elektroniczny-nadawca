<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetShopEZwrotyListInput
 */
class GetShopEZwrotyListInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetShopEZwrotyListInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetShopEZwrotyListInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetShopEZwrotyListInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetShopEZwrotyListInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetShopEZwrotyListInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetShopEZwrotyListInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetShopEZwrotyListInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetShopEZwrotyListInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

