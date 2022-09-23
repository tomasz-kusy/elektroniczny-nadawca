<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing WyslijLinkaOStatusieEZwrotuInput
 */
class WyslijLinkaOStatusieEZwrotuInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\WyslijLinkaOStatusieEZwrotuInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\WyslijLinkaOStatusieEZwrotuInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\WyslijLinkaOStatusieEZwrotuInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\WyslijLinkaOStatusieEZwrotuInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\WyslijLinkaOStatusieEZwrotuInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\WyslijLinkaOStatusieEZwrotuInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\WyslijLinkaOStatusieEZwrotuInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\WyslijLinkaOStatusieEZwrotuInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

