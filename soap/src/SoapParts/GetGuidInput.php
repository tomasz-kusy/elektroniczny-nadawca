<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetGuidInput
 */
class GetGuidInput
{

    /**
     * @var \TomaszKusy\En\GetGuid $getGuid
     */
    private $getGuid = null;

    /**
     * Gets as getGuid
     *
     * @return \TomaszKusy\En\GetGuid
     */
    public function getGetGuid()
    {
        return $this->getGuid;
    }

    /**
     * Sets a new getGuid
     *
     * @param \TomaszKusy\En\GetGuid $getGuid
     * @return self
     */
    public function setGetGuid(\TomaszKusy\En\GetGuid $getGuid)
    {
        $this->getGuid = $getGuid;
        return $this;
    }


}

