<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing SetJednostkaOrganizacyjnaInput
 */
class SetJednostkaOrganizacyjnaInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\SetJednostkaOrganizacyjnaInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\SetJednostkaOrganizacyjnaInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\SetJednostkaOrganizacyjnaInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\SetJednostkaOrganizacyjnaInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\SetJednostkaOrganizacyjnaInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\SetJednostkaOrganizacyjnaInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\SetJednostkaOrganizacyjnaInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\SetJednostkaOrganizacyjnaInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

