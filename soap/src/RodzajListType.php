<?php

namespace TomaszKusy\En;

/**
 * Class representing RodzajListType
 *
 *
 * XSD Type: rodzajListType
 */
class RodzajListType
{

    /**
     * @var bool $polecony
     */
    private $polecony = null;

    /**
     * @var string $kategoria
     */
    private $kategoria = null;

    /**
     * Gets as polecony
     *
     * @return bool
     */
    public function getPolecony()
    {
        return $this->polecony;
    }

    /**
     * Sets a new polecony
     *
     * @param bool $polecony
     * @return self
     */
    public function setPolecony($polecony)
    {
        $this->polecony = $polecony;
        return $this;
    }

    /**
     * Gets as kategoria
     *
     * @return string
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Sets a new kategoria
     *
     * @param string $kategoria
     * @return self
     */
    public function setKategoria($kategoria)
    {
        $this->kategoria = $kategoria;
        return $this;
    }


}

