<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing ChangePasswordOutput
 */
class ChangePasswordOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\ChangePasswordOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\ChangePasswordOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\ChangePasswordOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\ChangePasswordOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\ChangePasswordOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\ChangePasswordOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\ChangePasswordOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\ChangePasswordOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

