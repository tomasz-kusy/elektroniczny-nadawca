<?php

namespace TomaszKusy\En\GetGuid;

/**
 * Class representing GetGuidAType
 */
class GetGuidAType
{

    /**
     * @var int $ilosc
     */
    private $ilosc = null;

    /**
     * Gets as ilosc
     *
     * @return int
     */
    public function getIlosc()
    {
        return $this->ilosc;
    }

    /**
     * Sets a new ilosc
     *
     * @param int $ilosc
     * @return self
     */
    public function setIlosc($ilosc)
    {
        $this->ilosc = $ilosc;
        return $this;
    }


}

