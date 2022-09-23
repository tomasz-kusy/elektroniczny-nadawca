<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetUbezpieczeniaInfoInput
 */
class GetUbezpieczeniaInfoInput
{

    /**
     * @var \TomaszKusy\En\GetUbezpieczeniaInfo $getUbezpieczeniaInfo
     */
    private $getUbezpieczeniaInfo = null;

    /**
     * Gets as getUbezpieczeniaInfo
     *
     * @return \TomaszKusy\En\GetUbezpieczeniaInfo
     */
    public function getGetUbezpieczeniaInfo()
    {
        return $this->getUbezpieczeniaInfo;
    }

    /**
     * Sets a new getUbezpieczeniaInfo
     *
     * @param \TomaszKusy\En\GetUbezpieczeniaInfo $getUbezpieczeniaInfo
     * @return self
     */
    public function setGetUbezpieczeniaInfo(\TomaszKusy\En\GetUbezpieczeniaInfo $getUbezpieczeniaInfo)
    {
        $this->getUbezpieczeniaInfo = $getUbezpieczeniaInfo;
        return $this;
    }


}

