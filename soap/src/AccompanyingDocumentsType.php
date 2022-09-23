<?php

namespace TomaszKusy\En;

/**
 * Class representing AccompanyingDocumentsType
 *
 *
 * XSD Type: AccompanyingDocumentsType
 */
class AccompanyingDocumentsType
{

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $number
     */
    private $number = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }


}

