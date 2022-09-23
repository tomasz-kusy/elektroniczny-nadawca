<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetFirmowaPocztaBookInput
 */
class GetFirmowaPocztaBookInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetFirmowaPocztaBookInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetFirmowaPocztaBookInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetFirmowaPocztaBookInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetFirmowaPocztaBookInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetFirmowaPocztaBookInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetFirmowaPocztaBookInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetFirmowaPocztaBookInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetFirmowaPocztaBookInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

