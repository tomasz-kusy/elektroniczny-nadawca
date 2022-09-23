<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeListOutput
 */
class GetEnvelopeListOutput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeListResponse $getEnvelopeListResponse
     */
    private $getEnvelopeListResponse = null;

    /**
     * Gets as getEnvelopeListResponse
     *
     * @return \TomaszKusy\En\GetEnvelopeListResponse
     */
    public function getGetEnvelopeListResponse()
    {
        return $this->getEnvelopeListResponse;
    }

    /**
     * Sets a new getEnvelopeListResponse
     *
     * @param \TomaszKusy\En\GetEnvelopeListResponse $getEnvelopeListResponse
     * @return self
     */
    public function setGetEnvelopeListResponse(\TomaszKusy\En\GetEnvelopeListResponse $getEnvelopeListResponse)
    {
        $this->getEnvelopeListResponse = $getEnvelopeListResponse;
        return $this;
    }


}

