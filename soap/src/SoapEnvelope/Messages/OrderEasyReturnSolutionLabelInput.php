<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing OrderEasyReturnSolutionLabelInput
 */
class OrderEasyReturnSolutionLabelInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\OrderEasyReturnSolutionLabelInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\OrderEasyReturnSolutionLabelInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\OrderEasyReturnSolutionLabelInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\OrderEasyReturnSolutionLabelInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\OrderEasyReturnSolutionLabelInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\OrderEasyReturnSolutionLabelInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\OrderEasyReturnSolutionLabelInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\OrderEasyReturnSolutionLabelInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

