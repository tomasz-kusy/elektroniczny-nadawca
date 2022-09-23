<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing CreateShopEZwrotyInput
 */
class CreateShopEZwrotyInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\CreateShopEZwrotyInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\CreateShopEZwrotyInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\CreateShopEZwrotyInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\CreateShopEZwrotyInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\CreateShopEZwrotyInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\CreateShopEZwrotyInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\CreateShopEZwrotyInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\CreateShopEZwrotyInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

