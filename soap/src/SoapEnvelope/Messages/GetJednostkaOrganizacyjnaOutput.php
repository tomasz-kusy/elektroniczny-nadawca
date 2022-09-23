<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetJednostkaOrganizacyjnaOutput
 */
class GetJednostkaOrganizacyjnaOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetJednostkaOrganizacyjnaOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetJednostkaOrganizacyjnaOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetJednostkaOrganizacyjnaOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetJednostkaOrganizacyjnaOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetJednostkaOrganizacyjnaOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetJednostkaOrganizacyjnaOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetJednostkaOrganizacyjnaOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetJednostkaOrganizacyjnaOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

