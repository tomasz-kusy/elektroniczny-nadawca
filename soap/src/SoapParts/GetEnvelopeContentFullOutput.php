<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeContentFullOutput
 */
class GetEnvelopeContentFullOutput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeContentFullResponse $getEnvelopeContentFullResponse
     */
    private $getEnvelopeContentFullResponse = null;

    /**
     * Gets as getEnvelopeContentFullResponse
     *
     * @return \TomaszKusy\En\GetEnvelopeContentFullResponse
     */
    public function getGetEnvelopeContentFullResponse()
    {
        return $this->getEnvelopeContentFullResponse;
    }

    /**
     * Sets a new getEnvelopeContentFullResponse
     *
     * @param \TomaszKusy\En\GetEnvelopeContentFullResponse $getEnvelopeContentFullResponse
     * @return self
     */
    public function setGetEnvelopeContentFullResponse(\TomaszKusy\En\GetEnvelopeContentFullResponse $getEnvelopeContentFullResponse)
    {
        $this->getEnvelopeContentFullResponse = $getEnvelopeContentFullResponse;
        return $this;
    }


}

