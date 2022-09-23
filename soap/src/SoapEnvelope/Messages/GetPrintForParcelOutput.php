<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetPrintForParcelOutput
 */
class GetPrintForParcelOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetPrintForParcelOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetPrintForParcelOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetPrintForParcelOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetPrintForParcelOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetPrintForParcelOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetPrintForParcelOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetPrintForParcelOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetPrintForParcelOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

