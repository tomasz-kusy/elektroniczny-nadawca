<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing DeleteShopEZwrotyOutput
 */
class DeleteShopEZwrotyOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\DeleteShopEZwrotyOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\DeleteShopEZwrotyOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\DeleteShopEZwrotyOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\DeleteShopEZwrotyOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\DeleteShopEZwrotyOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\DeleteShopEZwrotyOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\DeleteShopEZwrotyOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\DeleteShopEZwrotyOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

