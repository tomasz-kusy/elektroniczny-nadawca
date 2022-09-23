<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing DeleteShopEZwrotyOutput
 */
class DeleteShopEZwrotyOutput
{

    /**
     * @var \TomaszKusy\En\DeleteShopEZwrotyResponse $deleteShopEZwrotyResponse
     */
    private $deleteShopEZwrotyResponse = null;

    /**
     * Gets as deleteShopEZwrotyResponse
     *
     * @return \TomaszKusy\En\DeleteShopEZwrotyResponse
     */
    public function getDeleteShopEZwrotyResponse()
    {
        return $this->deleteShopEZwrotyResponse;
    }

    /**
     * Sets a new deleteShopEZwrotyResponse
     *
     * @param \TomaszKusy\En\DeleteShopEZwrotyResponse $deleteShopEZwrotyResponse
     * @return self
     */
    public function setDeleteShopEZwrotyResponse(\TomaszKusy\En\DeleteShopEZwrotyResponse $deleteShopEZwrotyResponse)
    {
        $this->deleteShopEZwrotyResponse = $deleteShopEZwrotyResponse;
        return $this;
    }


}

