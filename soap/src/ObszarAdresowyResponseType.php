<?php

namespace TomaszKusy\En;

/**
 * Class representing ObszarAdresowyResponseType
 *
 *
 * XSD Type: obszarAdresowyResponseType
 */
class ObszarAdresowyResponseType
{

    /**
     * @var bool $isObszarMiasto
     */
    private $isObszarMiasto = null;

    /**
     * @var string $guid
     */
    private $guid = null;

    /**
     * Gets as isObszarMiasto
     *
     * @return bool
     */
    public function getIsObszarMiasto()
    {
        return $this->isObszarMiasto;
    }

    /**
     * Sets a new isObszarMiasto
     *
     * @param bool $isObszarMiasto
     * @return self
     */
    public function setIsObszarMiasto($isObszarMiasto)
    {
        $this->isObszarMiasto = $isObszarMiasto;
        return $this;
    }

    /**
     * Gets as guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * @param string $guid
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }


}

