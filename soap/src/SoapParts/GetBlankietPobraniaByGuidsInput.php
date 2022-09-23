<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetBlankietPobraniaByGuidsInput
 */
class GetBlankietPobraniaByGuidsInput
{

    /**
     * @var \TomaszKusy\En\GetBlankietPobraniaByGuids $getBlankietPobraniaByGuids
     */
    private $getBlankietPobraniaByGuids = null;

    /**
     * Gets as getBlankietPobraniaByGuids
     *
     * @return \TomaszKusy\En\GetBlankietPobraniaByGuids
     */
    public function getGetBlankietPobraniaByGuids()
    {
        return $this->getBlankietPobraniaByGuids;
    }

    /**
     * Sets a new getBlankietPobraniaByGuids
     *
     * @param \TomaszKusy\En\GetBlankietPobraniaByGuids $getBlankietPobraniaByGuids
     * @return self
     */
    public function setGetBlankietPobraniaByGuids(\TomaszKusy\En\GetBlankietPobraniaByGuids $getBlankietPobraniaByGuids)
    {
        $this->getBlankietPobraniaByGuids = $getBlankietPobraniaByGuids;
        return $this;
    }


}

