<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing UpdateShopEZwrotyOutput
 */
class UpdateShopEZwrotyOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\UpdateShopEZwrotyOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\UpdateShopEZwrotyOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\UpdateShopEZwrotyOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\UpdateShopEZwrotyOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\UpdateShopEZwrotyOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\UpdateShopEZwrotyOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\UpdateShopEZwrotyOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\UpdateShopEZwrotyOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

