<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetPasswordExpiredDateOutput
 */
class GetPasswordExpiredDateOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetPasswordExpiredDateOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetPasswordExpiredDateOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetPasswordExpiredDateOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetPasswordExpiredDateOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetPasswordExpiredDateOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetPasswordExpiredDateOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetPasswordExpiredDateOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetPasswordExpiredDateOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

