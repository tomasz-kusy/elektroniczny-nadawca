<?php

namespace TomaszKusy\En;

/**
 * Class representing PotwierdzenieOdbioruKurierskaType
 *
 *
 * XSD Type: potwierdzenieOdbioruKurierskaType
 */
class PotwierdzenieOdbioruKurierskaType
{

    /**
     * @var int $ilosc
     */
    private $ilosc = null;

    /**
     * @var string $sposob
     */
    private $sposob = null;

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

    /**
     * Gets as sposob
     *
     * @return string
     */
    public function getSposob()
    {
        return $this->sposob;
    }

    /**
     * Sets a new sposob
     *
     * @param string $sposob
     * @return self
     */
    public function setSposob($sposob)
    {
        $this->sposob = $sposob;
        return $this;
    }


}

