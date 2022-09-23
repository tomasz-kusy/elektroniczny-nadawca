<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetAddresLabelByGuidOutput
 */
class GetAddresLabelByGuidOutput
{

    /**
     * @var \TomaszKusy\En\GetAddresLabelByGuidResponse $getAddresLabelByGuidResponse
     */
    private $getAddresLabelByGuidResponse = null;

    /**
     * Gets as getAddresLabelByGuidResponse
     *
     * @return \TomaszKusy\En\GetAddresLabelByGuidResponse
     */
    public function getGetAddresLabelByGuidResponse()
    {
        return $this->getAddresLabelByGuidResponse;
    }

    /**
     * Sets a new getAddresLabelByGuidResponse
     *
     * @param \TomaszKusy\En\GetAddresLabelByGuidResponse $getAddresLabelByGuidResponse
     * @return self
     */
    public function setGetAddresLabelByGuidResponse(\TomaszKusy\En\GetAddresLabelByGuidResponse $getAddresLabelByGuidResponse)
    {
        $this->getAddresLabelByGuidResponse = $getAddresLabelByGuidResponse;
        return $this;
    }


}

