<?php

namespace TomaszKusy\En;

/**
 * Class representing LokalizacjaGeograficznaType
 *
 *
 * XSD Type: lokalizacjaGeograficznaType
 */
class LokalizacjaGeograficznaType
{

    /**
     * @var \TomaszKusy\En\WspolrzednaGeograficznaType $dlugosc
     */
    private $dlugosc = null;

    /**
     * @var \TomaszKusy\En\WspolrzednaGeograficznaType $szerokosc
     */
    private $szerokosc = null;

    /**
     * Gets as dlugosc
     *
     * @return \TomaszKusy\En\WspolrzednaGeograficznaType
     */
    public function getDlugosc()
    {
        return $this->dlugosc;
    }

    /**
     * Sets a new dlugosc
     *
     * @param \TomaszKusy\En\WspolrzednaGeograficznaType $dlugosc
     * @return self
     */
    public function setDlugosc(\TomaszKusy\En\WspolrzednaGeograficznaType $dlugosc)
    {
        $this->dlugosc = $dlugosc;
        return $this;
    }

    /**
     * Gets as szerokosc
     *
     * @return \TomaszKusy\En\WspolrzednaGeograficznaType
     */
    public function getSzerokosc()
    {
        return $this->szerokosc;
    }

    /**
     * Sets a new szerokosc
     *
     * @param \TomaszKusy\En\WspolrzednaGeograficznaType $szerokosc
     * @return self
     */
    public function setSzerokosc(\TomaszKusy\En\WspolrzednaGeograficznaType $szerokosc)
    {
        $this->szerokosc = $szerokosc;
        return $this;
    }


}

