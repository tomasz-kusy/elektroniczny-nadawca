<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing CreateShopEZwrotyOutput
 */
class CreateShopEZwrotyOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\CreateShopEZwrotyOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\CreateShopEZwrotyOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\CreateShopEZwrotyOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\CreateShopEZwrotyOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\CreateShopEZwrotyOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\CreateShopEZwrotyOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\CreateShopEZwrotyOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\CreateShopEZwrotyOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

