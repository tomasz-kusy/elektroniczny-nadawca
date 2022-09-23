<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetAddresLabelByGuidCompactInput
 */
class GetAddresLabelByGuidCompactInput
{

    /**
     * @var \TomaszKusy\En\GetAddresLabelByGuidCompact $getAddresLabelByGuidCompact
     */
    private $getAddresLabelByGuidCompact = null;

    /**
     * Gets as getAddresLabelByGuidCompact
     *
     * @return \TomaszKusy\En\GetAddresLabelByGuidCompact
     */
    public function getGetAddresLabelByGuidCompact()
    {
        return $this->getAddresLabelByGuidCompact;
    }

    /**
     * Sets a new getAddresLabelByGuidCompact
     *
     * @param \TomaszKusy\En\GetAddresLabelByGuidCompact $getAddresLabelByGuidCompact
     * @return self
     */
    public function setGetAddresLabelByGuidCompact(\TomaszKusy\En\GetAddresLabelByGuidCompact $getAddresLabelByGuidCompact)
    {
        $this->getAddresLabelByGuidCompact = $getAddresLabelByGuidCompact;
        return $this;
    }


}

