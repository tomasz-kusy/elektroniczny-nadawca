<?php

namespace TomaszKusy\En;

/**
 * Class representing Pocztex2021KurierType
 *
 *
 * XSD Type: pocztex2021KurierType
 */
class Pocztex2021KurierType extends Pocztex2021Type
{

    /**
     * @var \TomaszKusy\En\SubPocztex2021KurierType[] $subPrzesylka
     */
    private $subPrzesylka = [
        
    ];

    /**
     * @var \TomaszKusy\En\PunktOdbioruType $punktOdbioru
     */
    private $punktOdbioru = null;

    /**
     * @var \TomaszKusy\En\PunktNadaniaType $punktNadania
     */
    private $punktNadania = null;

    /**
     * @var bool $kopertaPocztex
     */
    private $kopertaPocztex = null;

    /**
     * @var string $godzinaDoreczenia
     */
    private $godzinaDoreczenia = null;

    /**
     * @var \DateTime $doreczenieWeWskazanymDniu
     */
    private $doreczenieWeWskazanymDniu = null;

    /**
     * Adds as subPrzesylka
     *
     * @return self
     * @param \TomaszKusy\En\SubPocztex2021KurierType $subPrzesylka
     */
    public function addToSubPrzesylka(\TomaszKusy\En\SubPocztex2021KurierType $subPrzesylka)
    {
        $this->subPrzesylka[] = $subPrzesylka;
        return $this;
    }

    /**
     * isset subPrzesylka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubPrzesylka($index)
    {
        return isset($this->subPrzesylka[$index]);
    }

    /**
     * unset subPrzesylka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubPrzesylka($index)
    {
        unset($this->subPrzesylka[$index]);
    }

    /**
     * Gets as subPrzesylka
     *
     * @return \TomaszKusy\En\SubPocztex2021KurierType[]
     */
    public function getSubPrzesylka()
    {
        return $this->subPrzesylka;
    }

    /**
     * Sets a new subPrzesylka
     *
     * @param \TomaszKusy\En\SubPocztex2021KurierType[] $subPrzesylka
     * @return self
     */
    public function setSubPrzesylka(array $subPrzesylka)
    {
        $this->subPrzesylka = $subPrzesylka;
        return $this;
    }

    /**
     * Gets as punktOdbioru
     *
     * @return \TomaszKusy\En\PunktOdbioruType
     */
    public function getPunktOdbioru()
    {
        return $this->punktOdbioru;
    }

    /**
     * Sets a new punktOdbioru
     *
     * @param \TomaszKusy\En\PunktOdbioruType $punktOdbioru
     * @return self
     */
    public function setPunktOdbioru(\TomaszKusy\En\PunktOdbioruType $punktOdbioru)
    {
        $this->punktOdbioru = $punktOdbioru;
        return $this;
    }

    /**
     * Gets as punktNadania
     *
     * @return \TomaszKusy\En\PunktNadaniaType
     */
    public function getPunktNadania()
    {
        return $this->punktNadania;
    }

    /**
     * Sets a new punktNadania
     *
     * @param \TomaszKusy\En\PunktNadaniaType $punktNadania
     * @return self
     */
    public function setPunktNadania(\TomaszKusy\En\PunktNadaniaType $punktNadania)
    {
        $this->punktNadania = $punktNadania;
        return $this;
    }

    /**
     * Gets as kopertaPocztex
     *
     * @return bool
     */
    public function getKopertaPocztex()
    {
        return $this->kopertaPocztex;
    }

    /**
     * Sets a new kopertaPocztex
     *
     * @param bool $kopertaPocztex
     * @return self
     */
    public function setKopertaPocztex($kopertaPocztex)
    {
        $this->kopertaPocztex = $kopertaPocztex;
        return $this;
    }

    /**
     * Gets as godzinaDoreczenia
     *
     * @return string
     */
    public function getGodzinaDoreczenia()
    {
        return $this->godzinaDoreczenia;
    }

    /**
     * Sets a new godzinaDoreczenia
     *
     * @param string $godzinaDoreczenia
     * @return self
     */
    public function setGodzinaDoreczenia($godzinaDoreczenia)
    {
        $this->godzinaDoreczenia = $godzinaDoreczenia;
        return $this;
    }

    /**
     * Gets as doreczenieWeWskazanymDniu
     *
     * @return \DateTime
     */
    public function getDoreczenieWeWskazanymDniu()
    {
        return $this->doreczenieWeWskazanymDniu;
    }

    /**
     * Sets a new doreczenieWeWskazanymDniu
     *
     * @param \DateTime $doreczenieWeWskazanymDniu
     * @return self
     */
    public function setDoreczenieWeWskazanymDniu(\DateTime $doreczenieWeWskazanymDniu)
    {
        $this->doreczenieWeWskazanymDniu = $doreczenieWeWskazanymDniu;
        return $this;
    }


}

