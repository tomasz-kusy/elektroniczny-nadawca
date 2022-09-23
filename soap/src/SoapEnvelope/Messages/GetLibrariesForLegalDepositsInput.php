<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetLibrariesForLegalDepositsInput
 */
class GetLibrariesForLegalDepositsInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetLibrariesForLegalDepositsInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetLibrariesForLegalDepositsInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetLibrariesForLegalDepositsInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetLibrariesForLegalDepositsInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetLibrariesForLegalDepositsInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetLibrariesForLegalDepositsInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetLibrariesForLegalDepositsInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetLibrariesForLegalDepositsInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

