<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeBuforOutput
 */
class GetEnvelopeBuforOutput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeBuforResponse $getEnvelopeBuforResponse
     */
    private $getEnvelopeBuforResponse = null;

    /**
     * Gets as getEnvelopeBuforResponse
     *
     * @return \TomaszKusy\En\GetEnvelopeBuforResponse
     */
    public function getGetEnvelopeBuforResponse()
    {
        return $this->getEnvelopeBuforResponse;
    }

    /**
     * Sets a new getEnvelopeBuforResponse
     *
     * @param \TomaszKusy\En\GetEnvelopeBuforResponse $getEnvelopeBuforResponse
     * @return self
     */
    public function setGetEnvelopeBuforResponse(\TomaszKusy\En\GetEnvelopeBuforResponse $getEnvelopeBuforResponse)
    {
        $this->getEnvelopeBuforResponse = $getEnvelopeBuforResponse;
        return $this;
    }


}

