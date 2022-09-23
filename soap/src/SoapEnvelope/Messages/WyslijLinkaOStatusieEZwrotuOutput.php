<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing WyslijLinkaOStatusieEZwrotuOutput
 */
class WyslijLinkaOStatusieEZwrotuOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\WyslijLinkaOStatusieEZwrotuOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\WyslijLinkaOStatusieEZwrotuOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\WyslijLinkaOStatusieEZwrotuOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\WyslijLinkaOStatusieEZwrotuOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\WyslijLinkaOStatusieEZwrotuOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\WyslijLinkaOStatusieEZwrotuOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\WyslijLinkaOStatusieEZwrotuOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\WyslijLinkaOStatusieEZwrotuOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

