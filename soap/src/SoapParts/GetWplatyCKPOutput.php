<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetWplatyCKPOutput
 */
class GetWplatyCKPOutput
{

    /**
     * @var \TomaszKusy\En\GetWplatyCKPResponse $getWplatyCKPResponse
     */
    private $getWplatyCKPResponse = null;

    /**
     * Gets as getWplatyCKPResponse
     *
     * @return \TomaszKusy\En\GetWplatyCKPResponse
     */
    public function getGetWplatyCKPResponse()
    {
        return $this->getWplatyCKPResponse;
    }

    /**
     * Sets a new getWplatyCKPResponse
     *
     * @param \TomaszKusy\En\GetWplatyCKPResponse $getWplatyCKPResponse
     * @return self
     */
    public function setGetWplatyCKPResponse(\TomaszKusy\En\GetWplatyCKPResponse $getWplatyCKPResponse)
    {
        $this->getWplatyCKPResponse = $getWplatyCKPResponse;
        return $this;
    }


}

