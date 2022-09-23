<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeStatusOutput
 */
class GetEnvelopeStatusOutput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeStatusResponse $getEnvelopeStatusResponse
     */
    private $getEnvelopeStatusResponse = null;

    /**
     * Gets as getEnvelopeStatusResponse
     *
     * @return \TomaszKusy\En\GetEnvelopeStatusResponse
     */
    public function getGetEnvelopeStatusResponse()
    {
        return $this->getEnvelopeStatusResponse;
    }

    /**
     * Sets a new getEnvelopeStatusResponse
     *
     * @param \TomaszKusy\En\GetEnvelopeStatusResponse $getEnvelopeStatusResponse
     * @return self
     */
    public function setGetEnvelopeStatusResponse(\TomaszKusy\En\GetEnvelopeStatusResponse $getEnvelopeStatusResponse)
    {
        $this->getEnvelopeStatusResponse = $getEnvelopeStatusResponse;
        return $this;
    }


}

