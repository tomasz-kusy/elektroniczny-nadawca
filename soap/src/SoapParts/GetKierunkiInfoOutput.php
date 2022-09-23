<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetKierunkiInfoOutput
 */
class GetKierunkiInfoOutput
{

    /**
     * @var \TomaszKusy\En\GetKierunkiInfoResponse $getKierunkiInfoResponse
     */
    private $getKierunkiInfoResponse = null;

    /**
     * Gets as getKierunkiInfoResponse
     *
     * @return \TomaszKusy\En\GetKierunkiInfoResponse
     */
    public function getGetKierunkiInfoResponse()
    {
        return $this->getKierunkiInfoResponse;
    }

    /**
     * Sets a new getKierunkiInfoResponse
     *
     * @param \TomaszKusy\En\GetKierunkiInfoResponse $getKierunkiInfoResponse
     * @return self
     */
    public function setGetKierunkiInfoResponse(\TomaszKusy\En\GetKierunkiInfoResponse $getKierunkiInfoResponse)
    {
        $this->getKierunkiInfoResponse = $getKierunkiInfoResponse;
        return $this;
    }


}

