<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeContentShortOutput
 */
class GetEnvelopeContentShortOutput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeContentShortResponse $getEnvelopeContentShortResponse
     */
    private $getEnvelopeContentShortResponse = null;

    /**
     * Gets as getEnvelopeContentShortResponse
     *
     * @return \TomaszKusy\En\GetEnvelopeContentShortResponse
     */
    public function getGetEnvelopeContentShortResponse()
    {
        return $this->getEnvelopeContentShortResponse;
    }

    /**
     * Sets a new getEnvelopeContentShortResponse
     *
     * @param \TomaszKusy\En\GetEnvelopeContentShortResponse $getEnvelopeContentShortResponse
     * @return self
     */
    public function setGetEnvelopeContentShortResponse(\TomaszKusy\En\GetEnvelopeContentShortResponse $getEnvelopeContentShortResponse)
    {
        $this->getEnvelopeContentShortResponse = $getEnvelopeContentShortResponse;
        return $this;
    }


}

