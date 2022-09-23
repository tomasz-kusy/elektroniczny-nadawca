<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing UpdateAccountInput
 */
class UpdateAccountInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\UpdateAccountInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\UpdateAccountInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\UpdateAccountInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\UpdateAccountInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\UpdateAccountInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\UpdateAccountInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\UpdateAccountInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\UpdateAccountInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

