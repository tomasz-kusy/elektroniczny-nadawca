<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetPrintForParcelInput
 */
class GetPrintForParcelInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetPrintForParcelInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetPrintForParcelInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetPrintForParcelInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetPrintForParcelInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetPrintForParcelInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetPrintForParcelInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetPrintForParcelInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetPrintForParcelInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

