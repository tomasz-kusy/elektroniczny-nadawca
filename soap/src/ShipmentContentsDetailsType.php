<?php

namespace TomaszKusy\En;

/**
 * Class representing ShipmentContentsDetailsType
 *
 *
 * XSD Type: ShipmentContentsDetailsType
 */
class ShipmentContentsDetailsType
{

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Net weight [g].
     *
     * @var int $netWeight
     */
    private $netWeight = null;

    /**
     * Declared value of a given type of goods,
     *  without the decimal point, e.g. 20000 cents.
     *
     * @var int $declaredValue
     */
    private $declaredValue = null;

    /**
     * Harmonized System (HS) Code.
     *
     * @var string $harmonizedSystemCode
     */
    private $harmonizedSystemCode = null;

    /**
     * Code (ISO 3166) of the country of origin of
     *  the described content.
     *  example: US
     *
     * @var string $originLocationCode
     */
    private $originLocationCode = null;

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as netWeight
     *
     * Net weight [g].
     *
     * @return int
     */
    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * Sets a new netWeight
     *
     * Net weight [g].
     *
     * @param int $netWeight
     * @return self
     */
    public function setNetWeight($netWeight)
    {
        $this->netWeight = $netWeight;
        return $this;
    }

    /**
     * Gets as declaredValue
     *
     * Declared value of a given type of goods,
     *  without the decimal point, e.g. 20000 cents.
     *
     * @return int
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * Sets a new declaredValue
     *
     * Declared value of a given type of goods,
     *  without the decimal point, e.g. 20000 cents.
     *
     * @param int $declaredValue
     * @return self
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = $declaredValue;
        return $this;
    }

    /**
     * Gets as harmonizedSystemCode
     *
     * Harmonized System (HS) Code.
     *
     * @return string
     */
    public function getHarmonizedSystemCode()
    {
        return $this->harmonizedSystemCode;
    }

    /**
     * Sets a new harmonizedSystemCode
     *
     * Harmonized System (HS) Code.
     *
     * @param string $harmonizedSystemCode
     * @return self
     */
    public function setHarmonizedSystemCode($harmonizedSystemCode)
    {
        $this->harmonizedSystemCode = $harmonizedSystemCode;
        return $this;
    }

    /**
     * Gets as originLocationCode
     *
     * Code (ISO 3166) of the country of origin of
     *  the described content.
     *  example: US
     *
     * @return string
     */
    public function getOriginLocationCode()
    {
        return $this->originLocationCode;
    }

    /**
     * Sets a new originLocationCode
     *
     * Code (ISO 3166) of the country of origin of
     *  the described content.
     *  example: US
     *
     * @param string $originLocationCode
     * @return self
     */
    public function setOriginLocationCode($originLocationCode)
    {
        $this->originLocationCode = $originLocationCode;
        return $this;
    }


}

