<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetAddresLabelCompactInput
 */
class GetAddresLabelCompactInput
{

    /**
     * @var \TomaszKusy\En\GetAddresLabelCompact $getAddresLabelCompact
     */
    private $getAddresLabelCompact = null;

    /**
     * Gets as getAddresLabelCompact
     *
     * @return \TomaszKusy\En\GetAddresLabelCompact
     */
    public function getGetAddresLabelCompact()
    {
        return $this->getAddresLabelCompact;
    }

    /**
     * Sets a new getAddresLabelCompact
     *
     * @param \TomaszKusy\En\GetAddresLabelCompact $getAddresLabelCompact
     * @return self
     */
    public function setGetAddresLabelCompact(\TomaszKusy\En\GetAddresLabelCompact $getAddresLabelCompact)
    {
        $this->getAddresLabelCompact = $getAddresLabelCompact;
        return $this;
    }


}

