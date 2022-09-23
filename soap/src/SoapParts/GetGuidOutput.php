<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetGuidOutput
 */
class GetGuidOutput
{

    /**
     * @var \TomaszKusy\En\GetGuidResponse $getGuidResponse
     */
    private $getGuidResponse = null;

    /**
     * Gets as getGuidResponse
     *
     * @return \TomaszKusy\En\GetGuidResponse
     */
    public function getGetGuidResponse()
    {
        return $this->getGuidResponse;
    }

    /**
     * Sets a new getGuidResponse
     *
     * @param \TomaszKusy\En\GetGuidResponse $getGuidResponse
     * @return self
     */
    public function setGetGuidResponse(\TomaszKusy\En\GetGuidResponse $getGuidResponse)
    {
        $this->getGuidResponse = $getGuidResponse;
        return $this;
    }


}

