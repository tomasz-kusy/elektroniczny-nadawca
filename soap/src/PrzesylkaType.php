<?php

namespace TomaszKusy\En;

/**
 * Class representing PrzesylkaType
 *
 *
 * XSD Type: przesylkaType
 */
class PrzesylkaType
{

    /**
     * @var string $guid
     */
    private $guid = null;

    /**
     * @var string $pakietGuid
     */
    private $pakietGuid = null;

    /**
     * @var string $opakowanieGuid
     */
    private $opakowanieGuid = null;

    /**
     * @var string $opis
     */
    private $opis = null;

    /**
     * @var \DateTime $planowanaDataNadania
     */
    private $planowanaDataNadania = null;

    /**
     * @var \TomaszKusy\En\OplacaOdbiorcaType $oplacaOdbiorca
     */
    private $oplacaOdbiorca = null;

    /**
     * @var string $mpk
     */
    private $mpk = null;

    /**
     * Gets as guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * @param string $guid
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * Gets as pakietGuid
     *
     * @return string
     */
    public function getPakietGuid()
    {
        return $this->pakietGuid;
    }

    /**
     * Sets a new pakietGuid
     *
     * @param string $pakietGuid
     * @return self
     */
    public function setPakietGuid($pakietGuid)
    {
        $this->pakietGuid = $pakietGuid;
        return $this;
    }

    /**
     * Gets as opakowanieGuid
     *
     * @return string
     */
    public function getOpakowanieGuid()
    {
        return $this->opakowanieGuid;
    }

    /**
     * Sets a new opakowanieGuid
     *
     * @param string $opakowanieGuid
     * @return self
     */
    public function setOpakowanieGuid($opakowanieGuid)
    {
        $this->opakowanieGuid = $opakowanieGuid;
        return $this;
    }

    /**
     * Gets as opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Sets a new opis
     *
     * @param string $opis
     * @return self
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;
        return $this;
    }

    /**
     * Gets as planowanaDataNadania
     *
     * @return \DateTime
     */
    public function getPlanowanaDataNadania()
    {
        return $this->planowanaDataNadania;
    }

    /**
     * Sets a new planowanaDataNadania
     *
     * @param \DateTime $planowanaDataNadania
     * @return self
     */
    public function setPlanowanaDataNadania(\DateTime $planowanaDataNadania)
    {
        $this->planowanaDataNadania = $planowanaDataNadania;
        return $this;
    }

    /**
     * Gets as oplacaOdbiorca
     *
     * @return \TomaszKusy\En\OplacaOdbiorcaType
     */
    public function getOplacaOdbiorca()
    {
        return $this->oplacaOdbiorca;
    }

    /**
     * Sets a new oplacaOdbiorca
     *
     * @param \TomaszKusy\En\OplacaOdbiorcaType $oplacaOdbiorca
     * @return self
     */
    public function setOplacaOdbiorca(\TomaszKusy\En\OplacaOdbiorcaType $oplacaOdbiorca)
    {
        $this->oplacaOdbiorca = $oplacaOdbiorca;
        return $this;
    }

    /**
     * Gets as mpk
     *
     * @return string
     */
    public function getMpk()
    {
        return $this->mpk;
    }

    /**
     * Sets a new mpk
     *
     * @param string $mpk
     * @return self
     */
    public function setMpk($mpk)
    {
        $this->mpk = $mpk;
        return $this;
    }


}

