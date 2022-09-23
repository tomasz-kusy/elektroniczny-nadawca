<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing AddOdwolanieDoReklamacjiInput
 */
class AddOdwolanieDoReklamacjiInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\AddOdwolanieDoReklamacjiInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\AddOdwolanieDoReklamacjiInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\AddOdwolanieDoReklamacjiInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\AddOdwolanieDoReklamacjiInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\AddOdwolanieDoReklamacjiInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\AddOdwolanieDoReklamacjiInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\AddOdwolanieDoReklamacjiInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\AddOdwolanieDoReklamacjiInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

