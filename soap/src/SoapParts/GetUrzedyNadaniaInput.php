<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetUrzedyNadaniaInput
 */
class GetUrzedyNadaniaInput
{

    /**
     * @var \TomaszKusy\En\GetUrzedyNadania $getUrzedyNadania
     */
    private $getUrzedyNadania = null;

    /**
     * Gets as getUrzedyNadania
     *
     * @return \TomaszKusy\En\GetUrzedyNadania
     */
    public function getGetUrzedyNadania()
    {
        return $this->getUrzedyNadania;
    }

    /**
     * Sets a new getUrzedyNadania
     *
     * @param \TomaszKusy\En\GetUrzedyNadania $getUrzedyNadania
     * @return self
     */
    public function setGetUrzedyNadania(\TomaszKusy\En\GetUrzedyNadania $getUrzedyNadania)
    {
        $this->getUrzedyNadania = $getUrzedyNadania;
        return $this;
    }


}

