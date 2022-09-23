<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing DeleteShopEZwrotyInput
 */
class DeleteShopEZwrotyInput
{

    /**
     * @var \TomaszKusy\En\DeleteShopEZwroty $deleteShopEZwroty
     */
    private $deleteShopEZwroty = null;

    /**
     * Gets as deleteShopEZwroty
     *
     * @return \TomaszKusy\En\DeleteShopEZwroty
     */
    public function getDeleteShopEZwroty()
    {
        return $this->deleteShopEZwroty;
    }

    /**
     * Sets a new deleteShopEZwroty
     *
     * @param \TomaszKusy\En\DeleteShopEZwroty $deleteShopEZwroty
     * @return self
     */
    public function setDeleteShopEZwroty(\TomaszKusy\En\DeleteShopEZwroty $deleteShopEZwroty)
    {
        $this->deleteShopEZwroty = $deleteShopEZwroty;
        return $this;
    }


}

