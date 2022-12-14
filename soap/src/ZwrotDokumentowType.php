<?php

namespace TomaszKusy\En;

/**
 * Class representing ZwrotDokumentowType
 *
 *
 * XSD Type: zwrotDokumentowType
 */
class ZwrotDokumentowType
{

    /**
     * @var int $odleglosc
     */
    private $odleglosc = null;

    /**
     * @var string $rodzajPocztex
     */
    private $rodzajPocztex = null;

    /**
     * @var \TomaszKusy\En\RodzajListType $rodzajList
     */
    private $rodzajList = null;

    /**
     * Gets as odleglosc
     *
     * @return int
     */
    public function getOdleglosc()
    {
        return $this->odleglosc;
    }

    /**
     * Sets a new odleglosc
     *
     * @param int $odleglosc
     * @return self
     */
    public function setOdleglosc($odleglosc)
    {
        $this->odleglosc = $odleglosc;
        return $this;
    }

    /**
     * Gets as rodzajPocztex
     *
     * @return string
     */
    public function getRodzajPocztex()
    {
        return $this->rodzajPocztex;
    }

    /**
     * Sets a new rodzajPocztex
     *
     * @param string $rodzajPocztex
     * @return self
     */
    public function setRodzajPocztex($rodzajPocztex)
    {
        $this->rodzajPocztex = $rodzajPocztex;
        return $this;
    }

    /**
     * Gets as rodzajList
     *
     * @return \TomaszKusy\En\RodzajListType
     */
    public function getRodzajList()
    {
        return $this->rodzajList;
    }

    /**
     * Sets a new rodzajList
     *
     * @param \TomaszKusy\En\RodzajListType $rodzajList
     * @return self
     */
    public function setRodzajList(\TomaszKusy\En\RodzajListType $rodzajList)
    {
        $this->rodzajList = $rodzajList;
        return $this;
    }


}

