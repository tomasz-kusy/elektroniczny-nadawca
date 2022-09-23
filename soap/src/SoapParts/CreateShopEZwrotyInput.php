<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing CreateShopEZwrotyInput
 */
class CreateShopEZwrotyInput
{

    /**
     * @var \TomaszKusy\En\CreateShopEZwroty $createShopEZwroty
     */
    private $createShopEZwroty = null;

    /**
     * Gets as createShopEZwroty
     *
     * @return \TomaszKusy\En\CreateShopEZwroty
     */
    public function getCreateShopEZwroty()
    {
        return $this->createShopEZwroty;
    }

    /**
     * Sets a new createShopEZwroty
     *
     * @param \TomaszKusy\En\CreateShopEZwroty $createShopEZwroty
     * @return self
     */
    public function setCreateShopEZwroty(\TomaszKusy\En\CreateShopEZwroty $createShopEZwroty)
    {
        $this->createShopEZwroty = $createShopEZwroty;
        return $this;
    }


}

