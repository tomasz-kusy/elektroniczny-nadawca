<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetAddressLabelOutput
 */
class GetAddressLabelOutput
{

    /**
     * @var \TomaszKusy\En\GetAddressLabelResponse $getAddressLabelResponse
     */
    private $getAddressLabelResponse = null;

    /**
     * Gets as getAddressLabelResponse
     *
     * @return \TomaszKusy\En\GetAddressLabelResponse
     */
    public function getGetAddressLabelResponse()
    {
        return $this->getAddressLabelResponse;
    }

    /**
     * Sets a new getAddressLabelResponse
     *
     * @param \TomaszKusy\En\GetAddressLabelResponse $getAddressLabelResponse
     * @return self
     */
    public function setGetAddressLabelResponse(\TomaszKusy\En\GetAddressLabelResponse $getAddressLabelResponse)
    {
        $this->getAddressLabelResponse = $getAddressLabelResponse;
        return $this;
    }


}

