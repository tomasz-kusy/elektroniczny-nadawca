<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetKierunkiInfoInput
 */
class GetKierunkiInfoInput
{

    /**
     * @var \TomaszKusy\En\GetKierunkiInfo $getKierunkiInfo
     */
    private $getKierunkiInfo = null;

    /**
     * Gets as getKierunkiInfo
     *
     * @return \TomaszKusy\En\GetKierunkiInfo
     */
    public function getGetKierunkiInfo()
    {
        return $this->getKierunkiInfo;
    }

    /**
     * Sets a new getKierunkiInfo
     *
     * @param \TomaszKusy\En\GetKierunkiInfo $getKierunkiInfo
     * @return self
     */
    public function setGetKierunkiInfo(\TomaszKusy\En\GetKierunkiInfo $getKierunkiInfo)
    {
        $this->getKierunkiInfo = $getKierunkiInfo;
        return $this;
    }


}

