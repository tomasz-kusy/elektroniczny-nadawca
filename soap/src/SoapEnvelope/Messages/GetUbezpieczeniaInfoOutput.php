<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetUbezpieczeniaInfoOutput
 */
class GetUbezpieczeniaInfoOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetUbezpieczeniaInfoOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetUbezpieczeniaInfoOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetUbezpieczeniaInfoOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetUbezpieczeniaInfoOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetUbezpieczeniaInfoOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetUbezpieczeniaInfoOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetUbezpieczeniaInfoOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetUbezpieczeniaInfoOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

