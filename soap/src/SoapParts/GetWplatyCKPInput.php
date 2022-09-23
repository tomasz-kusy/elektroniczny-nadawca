<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetWplatyCKPInput
 */
class GetWplatyCKPInput
{

    /**
     * @var \TomaszKusy\En\GetWplatyCKP $getWplatyCKP
     */
    private $getWplatyCKP = null;

    /**
     * Gets as getWplatyCKP
     *
     * @return \TomaszKusy\En\GetWplatyCKP
     */
    public function getGetWplatyCKP()
    {
        return $this->getWplatyCKP;
    }

    /**
     * Sets a new getWplatyCKP
     *
     * @param \TomaszKusy\En\GetWplatyCKP $getWplatyCKP
     * @return self
     */
    public function setGetWplatyCKP(\TomaszKusy\En\GetWplatyCKP $getWplatyCKP)
    {
        $this->getWplatyCKP = $getWplatyCKP;
        return $this;
    }


}

