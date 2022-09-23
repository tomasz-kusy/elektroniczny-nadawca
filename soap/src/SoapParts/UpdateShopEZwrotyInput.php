<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing UpdateShopEZwrotyInput
 */
class UpdateShopEZwrotyInput
{

    /**
     * @var \TomaszKusy\En\UpdateShopEZwroty $updateShopEZwroty
     */
    private $updateShopEZwroty = null;

    /**
     * Gets as updateShopEZwroty
     *
     * @return \TomaszKusy\En\UpdateShopEZwroty
     */
    public function getUpdateShopEZwroty()
    {
        return $this->updateShopEZwroty;
    }

    /**
     * Sets a new updateShopEZwroty
     *
     * @param \TomaszKusy\En\UpdateShopEZwroty $updateShopEZwroty
     * @return self
     */
    public function setUpdateShopEZwroty(\TomaszKusy\En\UpdateShopEZwroty $updateShopEZwroty)
    {
        $this->updateShopEZwroty = $updateShopEZwroty;
        return $this;
    }


}

