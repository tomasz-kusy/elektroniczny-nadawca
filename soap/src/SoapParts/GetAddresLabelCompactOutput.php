<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetAddresLabelCompactOutput
 */
class GetAddresLabelCompactOutput
{

    /**
     * @var \TomaszKusy\En\GetAddresLabelCompactResponse $getAddresLabelCompactResponse
     */
    private $getAddresLabelCompactResponse = null;

    /**
     * Gets as getAddresLabelCompactResponse
     *
     * @return \TomaszKusy\En\GetAddresLabelCompactResponse
     */
    public function getGetAddresLabelCompactResponse()
    {
        return $this->getAddresLabelCompactResponse;
    }

    /**
     * Sets a new getAddresLabelCompactResponse
     *
     * @param \TomaszKusy\En\GetAddresLabelCompactResponse $getAddresLabelCompactResponse
     * @return self
     */
    public function setGetAddresLabelCompactResponse(\TomaszKusy\En\GetAddresLabelCompactResponse $getAddresLabelCompactResponse)
    {
        $this->getAddresLabelCompactResponse = $getAddresLabelCompactResponse;
        return $this;
    }


}

