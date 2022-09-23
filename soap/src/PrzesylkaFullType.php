<?php

namespace TomaszKusy\En;

/**
 * Class representing PrzesylkaFullType
 *
 *
 * XSD Type: przesylkaFullType
 */
class PrzesylkaFullType
{

    /**
     * @var \TomaszKusy\En\PrzesylkaShortType $przesylkaShort
     */
    private $przesylkaShort = null;

    /**
     * @var \TomaszKusy\En\PrzesylkaType $przesylkaFull
     */
    private $przesylkaFull = null;

    /**
     * Gets as przesylkaShort
     *
     * @return \TomaszKusy\En\PrzesylkaShortType
     */
    public function getPrzesylkaShort()
    {
        return $this->przesylkaShort;
    }

    /**
     * Sets a new przesylkaShort
     *
     * @param \TomaszKusy\En\PrzesylkaShortType $przesylkaShort
     * @return self
     */
    public function setPrzesylkaShort(\TomaszKusy\En\PrzesylkaShortType $przesylkaShort)
    {
        $this->przesylkaShort = $przesylkaShort;
        return $this;
    }

    /**
     * Gets as przesylkaFull
     *
     * @return \TomaszKusy\En\PrzesylkaType
     */
    public function getPrzesylkaFull()
    {
        return $this->przesylkaFull;
    }

    /**
     * Sets a new przesylkaFull
     *
     * @param \TomaszKusy\En\PrzesylkaType $przesylkaFull
     * @return self
     */
    public function setPrzesylkaFull(\TomaszKusy\En\PrzesylkaType $przesylkaFull)
    {
        $this->przesylkaFull = $przesylkaFull;
        return $this;
    }


}

