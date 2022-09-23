<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing OrderEasyReturnSolutionLabelOutput
 */
class OrderEasyReturnSolutionLabelOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\OrderEasyReturnSolutionLabelOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\OrderEasyReturnSolutionLabelOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\OrderEasyReturnSolutionLabelOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\OrderEasyReturnSolutionLabelOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\OrderEasyReturnSolutionLabelOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\OrderEasyReturnSolutionLabelOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\OrderEasyReturnSolutionLabelOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\OrderEasyReturnSolutionLabelOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

