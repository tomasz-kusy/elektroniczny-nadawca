<?php

namespace TomaszKusy\En\GetShopEZwrotyListResponse;

/**
 * Class representing GetShopEZwrotyListResponseAType
 */
class GetShopEZwrotyListResponseAType
{

    /**
     * @var \TomaszKusy\En\ShopEZwrotyInfoType[] $shops
     */
    private $shops = [
        
    ];

    /**
     * Adds as shops
     *
     * @return self
     * @param \TomaszKusy\En\ShopEZwrotyInfoType $shops
     */
    public function addToShops(\TomaszKusy\En\ShopEZwrotyInfoType $shops)
    {
        $this->shops[] = $shops;
        return $this;
    }

    /**
     * isset shops
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShops($index)
    {
        return isset($this->shops[$index]);
    }

    /**
     * unset shops
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShops($index)
    {
        unset($this->shops[$index]);
    }

    /**
     * Gets as shops
     *
     * @return \TomaszKusy\En\ShopEZwrotyInfoType[]
     */
    public function getShops()
    {
        return $this->shops;
    }

    /**
     * Sets a new shops
     *
     * @param \TomaszKusy\En\ShopEZwrotyInfoType[] $shops
     * @return self
     */
    public function setShops(array $shops)
    {
        $this->shops = $shops;
        return $this;
    }


}

