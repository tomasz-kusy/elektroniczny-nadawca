<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing DeleteShopEZwrotyInput
 */
class DeleteShopEZwrotyInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\DeleteShopEZwrotyInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\DeleteShopEZwrotyInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\DeleteShopEZwrotyInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\DeleteShopEZwrotyInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\DeleteShopEZwrotyInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\DeleteShopEZwrotyInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\DeleteShopEZwrotyInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\DeleteShopEZwrotyInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

