<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetPasswordExpiredDateInput
 */
class GetPasswordExpiredDateInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetPasswordExpiredDateInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetPasswordExpiredDateInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetPasswordExpiredDateInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetPasswordExpiredDateInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetPasswordExpiredDateInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetPasswordExpiredDateInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetPasswordExpiredDateInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetPasswordExpiredDateInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

