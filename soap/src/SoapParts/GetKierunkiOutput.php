<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetKierunkiOutput
 */
class GetKierunkiOutput
{

    /**
     * @var \TomaszKusy\En\GetKierunkiResponse $getKierunkiResponse
     */
    private $getKierunkiResponse = null;

    /**
     * Gets as getKierunkiResponse
     *
     * @return \TomaszKusy\En\GetKierunkiResponse
     */
    public function getGetKierunkiResponse()
    {
        return $this->getKierunkiResponse;
    }

    /**
     * Sets a new getKierunkiResponse
     *
     * @param \TomaszKusy\En\GetKierunkiResponse $getKierunkiResponse
     * @return self
     */
    public function setGetKierunkiResponse(\TomaszKusy\En\GetKierunkiResponse $getKierunkiResponse)
    {
        $this->getKierunkiResponse = $getKierunkiResponse;
        return $this;
    }


}

