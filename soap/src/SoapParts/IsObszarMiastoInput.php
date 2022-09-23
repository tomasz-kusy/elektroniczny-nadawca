<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing IsObszarMiastoInput
 */
class IsObszarMiastoInput
{

    /**
     * @var \TomaszKusy\En\IsObszarMiasto $isObszarMiasto
     */
    private $isObszarMiasto = null;

    /**
     * Gets as isObszarMiasto
     *
     * @return \TomaszKusy\En\IsObszarMiasto
     */
    public function getIsObszarMiasto()
    {
        return $this->isObszarMiasto;
    }

    /**
     * Sets a new isObszarMiasto
     *
     * @param \TomaszKusy\En\IsObszarMiasto $isObszarMiasto
     * @return self
     */
    public function setIsObszarMiasto(\TomaszKusy\En\IsObszarMiasto $isObszarMiasto)
    {
        $this->isObszarMiasto = $isObszarMiasto;
        return $this;
    }


}

