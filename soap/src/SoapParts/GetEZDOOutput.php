<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEZDOOutput
 */
class GetEZDOOutput
{

    /**
     * @var \TomaszKusy\En\GetEZDOResponse $getEZDOResponse
     */
    private $getEZDOResponse = null;

    /**
     * Gets as getEZDOResponse
     *
     * @return \TomaszKusy\En\GetEZDOResponse
     */
    public function getGetEZDOResponse()
    {
        return $this->getEZDOResponse;
    }

    /**
     * Sets a new getEZDOResponse
     *
     * @param \TomaszKusy\En\GetEZDOResponse $getEZDOResponse
     * @return self
     */
    public function setGetEZDOResponse(\TomaszKusy\En\GetEZDOResponse $getEZDOResponse)
    {
        $this->getEZDOResponse = $getEZDOResponse;
        return $this;
    }


}

