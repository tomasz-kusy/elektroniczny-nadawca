<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetAddressLabelInput
 */
class GetAddressLabelInput
{

    /**
     * @var \TomaszKusy\En\GetAddressLabel $getAddressLabel
     */
    private $getAddressLabel = null;

    /**
     * Gets as getAddressLabel
     *
     * @return \TomaszKusy\En\GetAddressLabel
     */
    public function getGetAddressLabel()
    {
        return $this->getAddressLabel;
    }

    /**
     * Sets a new getAddressLabel
     *
     * @param \TomaszKusy\En\GetAddressLabel $getAddressLabel
     * @return self
     */
    public function setGetAddressLabel(\TomaszKusy\En\GetAddressLabel $getAddressLabel)
    {
        $this->getAddressLabel = $getAddressLabel;
        return $this;
    }


}

