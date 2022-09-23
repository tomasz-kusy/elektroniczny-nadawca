<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetBlankietPobraniaByGuidsOutput
 */
class GetBlankietPobraniaByGuidsOutput
{

    /**
     * @var \TomaszKusy\En\GetBlankietPobraniaByGuidsResponse $getBlankietPobraniaByGuidsResponse
     */
    private $getBlankietPobraniaByGuidsResponse = null;

    /**
     * Gets as getBlankietPobraniaByGuidsResponse
     *
     * @return \TomaszKusy\En\GetBlankietPobraniaByGuidsResponse
     */
    public function getGetBlankietPobraniaByGuidsResponse()
    {
        return $this->getBlankietPobraniaByGuidsResponse;
    }

    /**
     * Sets a new getBlankietPobraniaByGuidsResponse
     *
     * @param \TomaszKusy\En\GetBlankietPobraniaByGuidsResponse $getBlankietPobraniaByGuidsResponse
     * @return self
     */
    public function setGetBlankietPobraniaByGuidsResponse(\TomaszKusy\En\GetBlankietPobraniaByGuidsResponse $getBlankietPobraniaByGuidsResponse)
    {
        $this->getBlankietPobraniaByGuidsResponse = $getBlankietPobraniaByGuidsResponse;
        return $this;
    }


}

