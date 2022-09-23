<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing SetAktywnaKartaOutput
 */
class SetAktywnaKartaOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\SetAktywnaKartaOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\SetAktywnaKartaOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\SetAktywnaKartaOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\SetAktywnaKartaOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\SetAktywnaKartaOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\SetAktywnaKartaOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\SetAktywnaKartaOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\SetAktywnaKartaOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

