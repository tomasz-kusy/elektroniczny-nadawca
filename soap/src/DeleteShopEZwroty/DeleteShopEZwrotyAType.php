<?php

namespace TomaszKusy\En\DeleteShopEZwroty;

/**
 * Class representing DeleteShopEZwrotyAType
 */
class DeleteShopEZwrotyAType
{

    /**
     * @var int $idShop
     */
    private $idShop = null;

    /**
     * Gets as idShop
     *
     * @return int
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Sets a new idShop
     *
     * @param int $idShop
     * @return self
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;
        return $this;
    }


}

