<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetAddresLabelByGuidCompactOutput
 */
class GetAddresLabelByGuidCompactOutput
{

    /**
     * @var \TomaszKusy\En\GetAddresLabelByGuidCompactResponse $getAddresLabelByGuidCompactResponse
     */
    private $getAddresLabelByGuidCompactResponse = null;

    /**
     * Gets as getAddresLabelByGuidCompactResponse
     *
     * @return \TomaszKusy\En\GetAddresLabelByGuidCompactResponse
     */
    public function getGetAddresLabelByGuidCompactResponse()
    {
        return $this->getAddresLabelByGuidCompactResponse;
    }

    /**
     * Sets a new getAddresLabelByGuidCompactResponse
     *
     * @param \TomaszKusy\En\GetAddresLabelByGuidCompactResponse $getAddresLabelByGuidCompactResponse
     * @return self
     */
    public function setGetAddresLabelByGuidCompactResponse(\TomaszKusy\En\GetAddresLabelByGuidCompactResponse $getAddresLabelByGuidCompactResponse)
    {
        $this->getAddresLabelByGuidCompactResponse = $getAddresLabelByGuidCompactResponse;
        return $this;
    }


}

