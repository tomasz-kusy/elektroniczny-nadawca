<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetFirmowaPocztaBookOutput
 */
class GetFirmowaPocztaBookOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetFirmowaPocztaBookOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetFirmowaPocztaBookOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetFirmowaPocztaBookOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetFirmowaPocztaBookOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetFirmowaPocztaBookOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetFirmowaPocztaBookOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetFirmowaPocztaBookOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetFirmowaPocztaBookOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

