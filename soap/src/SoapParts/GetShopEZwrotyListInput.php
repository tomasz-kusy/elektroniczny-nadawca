<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetShopEZwrotyListInput
 */
class GetShopEZwrotyListInput
{

    /**
     * @var \TomaszKusy\En\GetShopEZwrotyList $getShopEZwrotyList
     */
    private $getShopEZwrotyList = null;

    /**
     * Gets as getShopEZwrotyList
     *
     * @return \TomaszKusy\En\GetShopEZwrotyList
     */
    public function getGetShopEZwrotyList()
    {
        return $this->getShopEZwrotyList;
    }

    /**
     * Sets a new getShopEZwrotyList
     *
     * @param \TomaszKusy\En\GetShopEZwrotyList $getShopEZwrotyList
     * @return self
     */
    public function setGetShopEZwrotyList(\TomaszKusy\En\GetShopEZwrotyList $getShopEZwrotyList)
    {
        $this->getShopEZwrotyList = $getShopEZwrotyList;
        return $this;
    }


}

