<?php

namespace TomaszKusy\En\CreateShopEZwroty;

/**
 * Class representing CreateShopEZwrotyAType
 */
class CreateShopEZwrotyAType
{

    /**
     * @var \TomaszKusy\En\ShopEZwrotyType $shop
     */
    private $shop = null;

    /**
     * Gets as shop
     *
     * @return \TomaszKusy\En\ShopEZwrotyType
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Sets a new shop
     *
     * @param \TomaszKusy\En\ShopEZwrotyType $shop
     * @return self
     */
    public function setShop(\TomaszKusy\En\ShopEZwrotyType $shop)
    {
        $this->shop = $shop;
        return $this;
    }


}

