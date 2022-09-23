<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing ChangePasswordInput
 */
class ChangePasswordInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\ChangePasswordInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\ChangePasswordInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\ChangePasswordInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\ChangePasswordInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\ChangePasswordInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\ChangePasswordInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\ChangePasswordInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\ChangePasswordInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

