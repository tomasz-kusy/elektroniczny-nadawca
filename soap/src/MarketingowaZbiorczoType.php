<?php

namespace TomaszKusy\En;

/**
 * Class representing MarketingowaZbiorczoType
 *
 *
 * XSD Type: marketingowaZbiorczoType
 */
class MarketingowaZbiorczoType extends PrzesylkaNieRejestrowanaType
{

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var string $gabaryt
     */
    private $gabaryt = null;

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

