<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing SetJednostkaOrganizacyjnaOutput
 */
class SetJednostkaOrganizacyjnaOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\SetJednostkaOrganizacyjnaOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\SetJednostkaOrganizacyjnaOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\SetJednostkaOrganizacyjnaOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\SetJednostkaOrganizacyjnaOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\SetJednostkaOrganizacyjnaOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\SetJednostkaOrganizacyjnaOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\SetJednostkaOrganizacyjnaOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\SetJednostkaOrganizacyjnaOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

