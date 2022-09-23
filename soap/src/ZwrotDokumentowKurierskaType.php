<?php

namespace TomaszKusy\En;

/**
 * Class representing ZwrotDokumentowKurierskaType
 *
 *
 * XSD Type: zwrotDokumentowKurierskaType
 */
class ZwrotDokumentowKurierskaType
{

    /**
     * @var string $rodzajPocztex
     */
    private $rodzajPocztex = null;

    /**
     * @var \TomaszKusy\En\RodzajListType $rodzajList
     */
    private $rodzajList = null;

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

