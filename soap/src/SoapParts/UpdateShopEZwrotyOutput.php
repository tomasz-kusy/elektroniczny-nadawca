<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing UpdateShopEZwrotyOutput
 */
class UpdateShopEZwrotyOutput
{

    /**
     * @var \TomaszKusy\En\UpdateShopEZwrotyResponse $updateShopEZwrotyResponse
     */
    private $updateShopEZwrotyResponse = null;

    /**
     * Gets as updateShopEZwrotyResponse
     *
     * @return \TomaszKusy\En\UpdateShopEZwrotyResponse
     */
    public function getUpdateShopEZwrotyResponse()
    {
        return $this->updateShopEZwrotyResponse;
    }

    /**
     * Sets a new updateShopEZwrotyResponse
     *
     * @param \TomaszKusy\En\UpdateShopEZwrotyResponse $updateShopEZwrotyResponse
     * @return self
     */
    public function setUpdateShopEZwrotyResponse(\TomaszKusy\En\UpdateShopEZwrotyResponse $updateShopEZwrotyResponse)
    {
        $this->updateShopEZwrotyResponse = $updateShopEZwrotyResponse;
        return $this;
    }


}

