<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetAddresLabelByGuidInput
 */
class GetAddresLabelByGuidInput
{

    /**
     * @var \TomaszKusy\En\GetAddresLabelByGuid $getAddresLabelByGuid
     */
    private $getAddresLabelByGuid = null;

    /**
     * Gets as getAddresLabelByGuid
     *
     * @return \TomaszKusy\En\GetAddresLabelByGuid
     */
    public function getGetAddresLabelByGuid()
    {
        return $this->getAddresLabelByGuid;
    }

    /**
     * Sets a new getAddresLabelByGuid
     *
     * @param \TomaszKusy\En\GetAddresLabelByGuid $getAddresLabelByGuid
     * @return self
     */
    public function setGetAddresLabelByGuid(\TomaszKusy\En\GetAddresLabelByGuid $getAddresLabelByGuid)
    {
        $this->getAddresLabelByGuid = $getAddresLabelByGuid;
        return $this;
    }


}

