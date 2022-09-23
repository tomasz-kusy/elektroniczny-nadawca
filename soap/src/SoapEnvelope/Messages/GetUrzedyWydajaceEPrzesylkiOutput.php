<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetUrzedyWydajaceEPrzesylkiOutput
 */
class GetUrzedyWydajaceEPrzesylkiOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetUrzedyWydajaceEPrzesylkiOutput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyWydajaceEPrzesylkiOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetUrzedyWydajaceEPrzesylkiOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetUrzedyWydajaceEPrzesylkiOutput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetUrzedyWydajaceEPrzesylkiOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyWydajaceEPrzesylkiOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyWydajaceEPrzesylkiOutput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyWydajaceEPrzesylkiOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

