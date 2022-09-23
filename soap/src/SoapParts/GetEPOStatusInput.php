<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEPOStatusInput
 */
class GetEPOStatusInput
{

    /**
     * @var \TomaszKusy\En\GetEPOStatus $getEPOStatus
     */
    private $getEPOStatus = null;

    /**
     * Gets as getEPOStatus
     *
     * @return \TomaszKusy\En\GetEPOStatus
     */
    public function getGetEPOStatus()
    {
        return $this->getEPOStatus;
    }

    /**
     * Sets a new getEPOStatus
     *
     * @param \TomaszKusy\En\GetEPOStatus $getEPOStatus
     * @return self
     */
    public function setGetEPOStatus(\TomaszKusy\En\GetEPOStatus $getEPOStatus)
    {
        $this->getEPOStatus = $getEPOStatus;
        return $this;
    }


}

