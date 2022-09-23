<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeBuforListOutput
 */
class GetEnvelopeBuforListOutput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeBuforListResponse $getEnvelopeBuforListResponse
     */
    private $getEnvelopeBuforListResponse = null;

    /**
     * Gets as getEnvelopeBuforListResponse
     *
     * @return \TomaszKusy\En\GetEnvelopeBuforListResponse
     */
    public function getGetEnvelopeBuforListResponse()
    {
        return $this->getEnvelopeBuforListResponse;
    }

    /**
     * Sets a new getEnvelopeBuforListResponse
     *
     * @param \TomaszKusy\En\GetEnvelopeBuforListResponse $getEnvelopeBuforListResponse
     * @return self
     */
    public function setGetEnvelopeBuforListResponse(\TomaszKusy\En\GetEnvelopeBuforListResponse $getEnvelopeBuforListResponse)
    {
        $this->getEnvelopeBuforListResponse = $getEnvelopeBuforListResponse;
        return $this;
    }


}

