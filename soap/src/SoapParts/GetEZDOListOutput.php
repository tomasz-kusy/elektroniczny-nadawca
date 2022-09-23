<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEZDOListOutput
 */
class GetEZDOListOutput
{

    /**
     * @var \TomaszKusy\En\GetEZDOListResponse $getEZDOListResponse
     */
    private $getEZDOListResponse = null;

    /**
     * Gets as getEZDOListResponse
     *
     * @return \TomaszKusy\En\GetEZDOListResponse
     */
    public function getGetEZDOListResponse()
    {
        return $this->getEZDOListResponse;
    }

    /**
     * Sets a new getEZDOListResponse
     *
     * @param \TomaszKusy\En\GetEZDOListResponse $getEZDOListResponse
     * @return self
     */
    public function setGetEZDOListResponse(\TomaszKusy\En\GetEZDOListResponse $getEZDOListResponse)
    {
        $this->getEZDOListResponse = $getEZDOListResponse;
        return $this;
    }


}

