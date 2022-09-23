<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEPOStatusOutput
 */
class GetEPOStatusOutput
{

    /**
     * @var \TomaszKusy\En\GetEPOStatusResponse $getEPOStatusResponse
     */
    private $getEPOStatusResponse = null;

    /**
     * Gets as getEPOStatusResponse
     *
     * @return \TomaszKusy\En\GetEPOStatusResponse
     */
    public function getGetEPOStatusResponse()
    {
        return $this->getEPOStatusResponse;
    }

    /**
     * Sets a new getEPOStatusResponse
     *
     * @param \TomaszKusy\En\GetEPOStatusResponse $getEPOStatusResponse
     * @return self
     */
    public function setGetEPOStatusResponse(\TomaszKusy\En\GetEPOStatusResponse $getEPOStatusResponse)
    {
        $this->getEPOStatusResponse = $getEPOStatusResponse;
        return $this;
    }


}

