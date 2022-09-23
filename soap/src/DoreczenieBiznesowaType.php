<?php

namespace TomaszKusy\En;

/**
 * Class representing DoreczenieBiznesowaType
 *
 *
 * XSD Type: doreczenieBiznesowaType
 */
class DoreczenieBiznesowaType
{

    /**
     * @var bool $doRakWlasnych
     */
    private $doRakWlasnych = null;

    /**
     * Gets as doRakWlasnych
     *
     * @return bool
     */
    public function getDoRakWlasnych()
    {
        return $this->doRakWlasnych;
    }

    /**
     * Sets a new doRakWlasnych
     *
     * @param bool $doRakWlasnych
     * @return self
     */
    public function setDoRakWlasnych($doRakWlasnych)
    {
        $this->doRakWlasnych = $doRakWlasnych;
        return $this;
    }


}

