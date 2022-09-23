<?php

namespace TomaszKusy\En;

/**
 * Class representing EPOInfoType
 *
 *
 * XSD Type: EPOInfoType
 */
class EPOInfoType
{

    /**
     * @var \TomaszKusy\En\AwizoPrzesylkiType $awizoPrzesylki
     */
    private $awizoPrzesylki = null;

    /**
     * @var \TomaszKusy\En\DoreczeniePrzesylkiType $doreczeniePrzesylki
     */
    private $doreczeniePrzesylki = null;

    /**
     * @var \TomaszKusy\En\ZwrotPrzesylkiType $zwrotPrzesylki
     */
    private $zwrotPrzesylki = null;

    /**
     * Gets as awizoPrzesylki
     *
     * @return \TomaszKusy\En\AwizoPrzesylkiType
     */
    public function getAwizoPrzesylki()
    {
        return $this->awizoPrzesylki;
    }

    /**
     * Sets a new awizoPrzesylki
     *
     * @param \TomaszKusy\En\AwizoPrzesylkiType $awizoPrzesylki
     * @return self
     */
    public function setAwizoPrzesylki(\TomaszKusy\En\AwizoPrzesylkiType $awizoPrzesylki)
    {
        $this->awizoPrzesylki = $awizoPrzesylki;
        return $this;
    }

    /**
     * Gets as doreczeniePrzesylki
     *
     * @return \TomaszKusy\En\DoreczeniePrzesylkiType
     */
    public function getDoreczeniePrzesylki()
    {
        return $this->doreczeniePrzesylki;
    }

    /**
     * Sets a new doreczeniePrzesylki
     *
     * @param \TomaszKusy\En\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @return self
     */
    public function setDoreczeniePrzesylki(\TomaszKusy\En\DoreczeniePrzesylkiType $doreczeniePrzesylki)
    {
        $this->doreczeniePrzesylki = $doreczeniePrzesylki;
        return $this;
    }

    /**
     * Gets as zwrotPrzesylki
     *
     * @return \TomaszKusy\En\ZwrotPrzesylkiType
     */
    public function getZwrotPrzesylki()
    {
        return $this->zwrotPrzesylki;
    }

    /**
     * Sets a new zwrotPrzesylki
     *
     * @param \TomaszKusy\En\ZwrotPrzesylkiType $zwrotPrzesylki
     * @return self
     */
    public function setZwrotPrzesylki(\TomaszKusy\En\ZwrotPrzesylkiType $zwrotPrzesylki)
    {
        $this->zwrotPrzesylki = $zwrotPrzesylki;
        return $this;
    }


}

