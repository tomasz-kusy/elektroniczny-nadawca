<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing IsObszarMiastoOutput
 */
class IsObszarMiastoOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\IsObszarMiastoOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\IsObszarMiastoOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\IsObszarMiastoOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\IsObszarMiastoOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\IsObszarMiastoOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\IsObszarMiastoOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\IsObszarMiastoOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\IsObszarMiastoOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

