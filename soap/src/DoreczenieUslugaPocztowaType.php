<?php

namespace TomaszKusy\En;

/**
 * Class representing DoreczenieUslugaPocztowaType
 *
 *
 * XSD Type: doreczenieUslugaPocztowaType
 */
class DoreczenieUslugaPocztowaType
{

    /**
     * @var \DateTime $oczekiwanyTerminDoreczenia
     */
    private $oczekiwanyTerminDoreczenia = null;

    /**
     * @var string $oczekiwanaGodzinaDoreczenia
     */
    private $oczekiwanaGodzinaDoreczenia = null;

    /**
     * @var bool $wSobote
     */
    private $wSobote = null;

    /**
     * @var bool $doRakWlasnych
     */
    private $doRakWlasnych = null;

    /**
     * Gets as oczekiwanyTerminDoreczenia
     *
     * @return \DateTime
     */
    public function getOczekiwanyTerminDoreczenia()
    {
        return $this->oczekiwanyTerminDoreczenia;
    }

    /**
     * Sets a new oczekiwanyTerminDoreczenia
     *
     * @param \DateTime $oczekiwanyTerminDoreczenia
     * @return self
     */
    public function setOczekiwanyTerminDoreczenia(\DateTime $oczekiwanyTerminDoreczenia)
    {
        $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;
        return $this;
    }

    /**
     * Gets as oczekiwanaGodzinaDoreczenia
     *
     * @return string
     */
    public function getOczekiwanaGodzinaDoreczenia()
    {
        return $this->oczekiwanaGodzinaDoreczenia;
    }

    /**
     * Sets a new oczekiwanaGodzinaDoreczenia
     *
     * @param string $oczekiwanaGodzinaDoreczenia
     * @return self
     */
    public function setOczekiwanaGodzinaDoreczenia($oczekiwanaGodzinaDoreczenia)
    {
        $this->oczekiwanaGodzinaDoreczenia = $oczekiwanaGodzinaDoreczenia;
        return $this;
    }

    /**
     * Gets as wSobote
     *
     * @return bool
     */
    public function getWSobote()
    {
        return $this->wSobote;
    }

    /**
     * Sets a new wSobote
     *
     * @param bool $wSobote
     * @return self
     */
    public function setWSobote($wSobote)
    {
        $this->wSobote = $wSobote;
        return $this;
    }

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

