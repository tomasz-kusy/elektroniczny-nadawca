<?php

namespace TomaszKusy\En\SoapEnvelope\Messages;

/**
 * Class representing GetUrzedyWydajaceEPrzesylkiInput
 */
class GetUrzedyWydajaceEPrzesylkiInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \TomaszKusy\En\SoapParts\GetUrzedyWydajaceEPrzesylkiInput $body
     */
    private $body = null;

    /**
     * @var \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyWydajaceEPrzesylkiInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \TomaszKusy\En\SoapParts\GetUrzedyWydajaceEPrzesylkiInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \TomaszKusy\En\SoapParts\GetUrzedyWydajaceEPrzesylkiInput $body
     * @return self
     */
    public function setBody(\TomaszKusy\En\SoapParts\GetUrzedyWydajaceEPrzesylkiInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyWydajaceEPrzesylkiInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyWydajaceEPrzesylkiInput $header
     * @return self
     */
    public function setHeader(\TomaszKusy\En\SoapEnvelope\Headers\GetUrzedyWydajaceEPrzesylkiInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

