<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetPlacowkiPocztoweOutput
 */
class GetPlacowkiPocztoweOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetPlacowkiPocztoweOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetPlacowkiPocztoweOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetPlacowkiPocztoweOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetPlacowkiPocztoweOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetPlacowkiPocztoweOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetPlacowkiPocztoweOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetPlacowkiPocztoweOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetPlacowkiPocztoweOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

