<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing SetEnvelopeBuforDataNadaniaOutput
 */
class SetEnvelopeBuforDataNadaniaOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\SetEnvelopeBuforDataNadaniaOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\SetEnvelopeBuforDataNadaniaOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\SetEnvelopeBuforDataNadaniaOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\SetEnvelopeBuforDataNadaniaOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\SetEnvelopeBuforDataNadaniaOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\SetEnvelopeBuforDataNadaniaOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\SetEnvelopeBuforDataNadaniaOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\SetEnvelopeBuforDataNadaniaOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

