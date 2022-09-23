<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing SetEnvelopeBuforDataNadaniaInput
 */
class SetEnvelopeBuforDataNadaniaInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\SetEnvelopeBuforDataNadaniaInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\SetEnvelopeBuforDataNadaniaInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\SetEnvelopeBuforDataNadaniaInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\SetEnvelopeBuforDataNadaniaInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\SetEnvelopeBuforDataNadaniaInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\SetEnvelopeBuforDataNadaniaInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\SetEnvelopeBuforDataNadaniaInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\SetEnvelopeBuforDataNadaniaInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

