<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing UpdateProfilInput
 */
class UpdateProfilInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\UpdateProfilInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\UpdateProfilInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\UpdateProfilInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\UpdateProfilInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\UpdateProfilInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\UpdateProfilInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\UpdateProfilInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\UpdateProfilInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

