<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetUbezpieczeniaInfoInput
 */
class GetUbezpieczeniaInfoInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetUbezpieczeniaInfoInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetUbezpieczeniaInfoInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetUbezpieczeniaInfoInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetUbezpieczeniaInfoInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetUbezpieczeniaInfoInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetUbezpieczeniaInfoInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetUbezpieczeniaInfoInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetUbezpieczeniaInfoInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

