<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing IsObszarMiastoInput
 */
class IsObszarMiastoInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\IsObszarMiastoInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\IsObszarMiastoInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\IsObszarMiastoInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\IsObszarMiastoInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\IsObszarMiastoInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\IsObszarMiastoInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\IsObszarMiastoInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\IsObszarMiastoInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

