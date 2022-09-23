<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetShopEZwrotyListOutput
 */
class GetShopEZwrotyListOutput
{

    /**
     * @var \TomaszKusy\En\GetShopEZwrotyListResponse $getShopEZwrotyListResponse
     */
    private $getShopEZwrotyListResponse = null;

    /**
     * Gets as getShopEZwrotyListResponse
     *
     * @return \TomaszKusy\En\GetShopEZwrotyListResponse
     */
    public function getGetShopEZwrotyListResponse()
    {
        return $this->getShopEZwrotyListResponse;
    }

    /**
     * Sets a new getShopEZwrotyListResponse
     *
     * @param \TomaszKusy\En\GetShopEZwrotyListResponse $getShopEZwrotyListResponse
     * @return self
     */
    public function setGetShopEZwrotyListResponse(\TomaszKusy\En\GetShopEZwrotyListResponse $getShopEZwrotyListResponse)
    {
        $this->getShopEZwrotyListResponse = $getShopEZwrotyListResponse;
        return $this;
    }


}

