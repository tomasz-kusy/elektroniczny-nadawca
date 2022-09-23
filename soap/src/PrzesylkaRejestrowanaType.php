<?php

namespace TomaszKusy\En;

/**
 * Class representing PrzesylkaRejestrowanaType
 *
 *
 * XSD Type: przesylkaRejestrowanaType
 */
class PrzesylkaRejestrowanaType extends PrzesylkaType
{

    /**
     * @var string $numerNadania
     */
    private $numerNadania = null;

    /**
     * @var string $sygnatura
     */
    private $sygnatura = null;

    /**
     * @var string $terminSprawy
     */
    private $terminSprawy = null;

    /**
     * @var string $rodzaj
     */
    private $rodzaj = null;

    /**
     * @var \TomaszKusy\En\AdresType $adres
     */
    private $adres = null;

    /**
     * @var \TomaszKusy\En\AdresType $nadawca
     */
    private $nadawca = null;

    /**
     * @var \TomaszKusy\En\RelatedToAllegroType $relatedToAllegro
     */
    private $relatedToAllegro = null;

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;
        return $this;
    }

    /**
     * Gets as sygnatura
     *
     * @return string
     */
    public function getSygnatura()
    {
        return $this->sygnatura;
    }

    /**
     * Sets a new sygnatura
     *
     * @param string $sygnatura
     * @return self
     */
    public function setSygnatura($sygnatura)
    {
        $this->sygnatura = $sygnatura;
        return $this;
    }

    /**
     * Gets as terminSprawy
     *
     * @return string
     */
    public function getTerminSprawy()
    {
        return $this->terminSprawy;
    }

    /**
     * Sets a new terminSprawy
     *
     * @param string $terminSprawy
     * @return self
     */
    public function setTerminSprawy($terminSprawy)
    {
        $this->terminSprawy = $terminSprawy;
        return $this;
    }

    /**
     * Gets as rodzaj
     *
     * @return string
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * Sets a new rodzaj
     *
     * @param string $rodzaj
     * @return self
     */
    public function setRodzaj($rodzaj)
    {
        $this->rodzaj = $rodzaj;
        return $this;
    }

    /**
     * Gets as adres
     *
     * @return \TomaszKusy\En\AdresType
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \TomaszKusy\En\AdresType $adres
     * @return self
     */
    public function setAdres(\TomaszKusy\En\AdresType $adres)
    {
        $this->adres = $adres;
        return $this;
    }

    /**
     * Gets as nadawca
     *
     * @return \TomaszKusy\En\AdresType
     */
    public function getNadawca()
    {
        return $this->nadawca;
    }

    /**
     * Sets a new nadawca
     *
     * @param \TomaszKusy\En\AdresType $nadawca
     * @return self
     */
    public function setNadawca(\TomaszKusy\En\AdresType $nadawca)
    {
        $this->nadawca = $nadawca;
        return $this;
    }

    /**
     * Gets as relatedToAllegro
     *
     * @return \TomaszKusy\En\RelatedToAllegroType
     */
    public function getRelatedToAllegro()
    {
        return $this->relatedToAllegro;
    }

    /**
     * Sets a new relatedToAllegro
     *
     * @param \TomaszKusy\En\RelatedToAllegroType $relatedToAllegro
     * @return self
     */
    public function setRelatedToAllegro(\TomaszKusy\En\RelatedToAllegroType $relatedToAllegro)
    {
        $this->relatedToAllegro = $relatedToAllegro;
        return $this;
    }


}

