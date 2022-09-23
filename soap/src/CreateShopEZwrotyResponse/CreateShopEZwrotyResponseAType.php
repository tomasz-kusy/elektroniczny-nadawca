<?php

namespace TomaszKusy\En\CreateShopEZwrotyResponse;

/**
 * Class representing CreateShopEZwrotyResponseAType
 */
class CreateShopEZwrotyResponseAType
{

    /**
     * @var int $idShop
     */
    private $idShop = null;

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

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

    /**
     * Adds as error
     *
     * @return self
     * @param \TomaszKusy\En\ErrorType $error
     */
    public function addToError(\TomaszKusy\En\ErrorType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return \TomaszKusy\En\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \TomaszKusy\En\ErrorType[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }


}

