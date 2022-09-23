<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetPlacowkiPocztoweInput
 */
class GetPlacowkiPocztoweInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetPlacowkiPocztoweInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetPlacowkiPocztoweInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetPlacowkiPocztoweInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetPlacowkiPocztoweInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetPlacowkiPocztoweInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetPlacowkiPocztoweInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetPlacowkiPocztoweInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetPlacowkiPocztoweInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

