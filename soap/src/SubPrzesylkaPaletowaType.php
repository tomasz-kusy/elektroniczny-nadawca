<?php

namespace TomaszKusy\En;

/**
 * Class representing SubPrzesylkaPaletowaType
 *
 *
 * XSD Type: subPrzesylkaPaletowaType
 */
class SubPrzesylkaPaletowaType extends PrzesylkaType
{

    /**
     * @var string $zawartosc
     */
    private $zawartosc = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var \TomaszKusy\En\PaletaType $paleta
     */
    private $paleta = null;

    /**
     * Gets as zawartosc
     *
     * @return string
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Sets a new zawartosc
     *
     * @param string $zawartosc
     * @return self
     */
    public function setZawartosc($zawartosc)
    {
        $this->zawartosc = $zawartosc;
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
     * Gets as paleta
     *
     * @return \TomaszKusy\En\PaletaType
     */
    public function getPaleta()
    {
        return $this->paleta;
    }

    /**
     * Sets a new paleta
     *
     * @param \TomaszKusy\En\PaletaType $paleta
     * @return self
     */
    public function setPaleta(\TomaszKusy\En\PaletaType $paleta)
    {
        $this->paleta = $paleta;
        return $this;
    }


}

