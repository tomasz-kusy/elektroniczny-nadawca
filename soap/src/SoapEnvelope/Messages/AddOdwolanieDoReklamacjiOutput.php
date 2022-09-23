<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing AddOdwolanieDoReklamacjiOutput
 */
class AddOdwolanieDoReklamacjiOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\AddOdwolanieDoReklamacjiOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\AddOdwolanieDoReklamacjiOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\AddOdwolanieDoReklamacjiOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\AddOdwolanieDoReklamacjiOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\AddOdwolanieDoReklamacjiOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\AddOdwolanieDoReklamacjiOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\AddOdwolanieDoReklamacjiOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\AddOdwolanieDoReklamacjiOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

