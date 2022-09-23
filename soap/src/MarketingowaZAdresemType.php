<?php

namespace TomaszKusy\En;

/**
 * Class representing MarketingowaZAdresemType
 *
 *
 * XSD Type: marketingowaZAdresemType
 */
class MarketingowaZAdresemType extends PrzesylkaType
{

    /**
     * @var \TomaszKusy\En\AdresType $adres
     */
    private $adres = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var string $gabaryt
     */
    private $gabaryt = null;

    /**
     * Gets as adres
     *
     * @return \TomaszKusy\En\AdresType
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \TomaszKusy\En\AdresType $adres
     * @return self
     */
    public function setAdres(\TomaszKusy\En\AdresType $adres)
    {
        $this->adres = $adres;
        return $this;
    }

    /**
     * Gets as masa
     *
     * @return int
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Sets a new masa
     *
     * @param int $masa
     * @return self
     */
    public function setMasa($masa)
    {
        $this->masa = $masa;
        return $this;
    }

    /**
     * Gets as gabaryt
     *
     * @return string
     */
    public function getGabaryt()
    {
        return $this->gabaryt;
    }

    /**
     * Sets a new gabaryt
     *
     * @param string $gabaryt
     * @return self
     */
    public function setGabaryt($gabaryt)
    {
        $this->gabaryt = $gabaryt;
        return $this;
    }


}

