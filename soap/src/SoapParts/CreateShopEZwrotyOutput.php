<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing CreateShopEZwrotyOutput
 */
class CreateShopEZwrotyOutput
{

    /**
     * @var \TomaszKusy\En\CreateShopEZwrotyResponse $createShopEZwrotyResponse
     */
    private $createShopEZwrotyResponse = null;

    /**
     * Gets as createShopEZwrotyResponse
     *
     * @return \TomaszKusy\En\CreateShopEZwrotyResponse
     */
    public function getCreateShopEZwrotyResponse()
    {
        return $this->createShopEZwrotyResponse;
    }

    /**
     * Sets a new createShopEZwrotyResponse
     *
     * @param \TomaszKusy\En\CreateShopEZwrotyResponse $createShopEZwrotyResponse
     * @return self
     */
    public function setCreateShopEZwrotyResponse(\TomaszKusy\En\CreateShopEZwrotyResponse $createShopEZwrotyResponse)
    {
        $this->createShopEZwrotyResponse = $createShopEZwrotyResponse;
        return $this;
    }


}

