<?php

namespace TomaszKusy\En;

/**
 * Class representing EMSType
 *
 *
 * XSD Type: EMSType
 */
class EMSType extends PrzesylkaRejestrowanaType
{

    /**
     * @var string $typOpakowania
     */
    private $typOpakowania = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var bool $zalaczoneDokumenty
     */
    private $zalaczoneDokumenty = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    private $numerPrzesylkiKlienta = null;

    /**
     * @var \TomaszKusy\En\UbezpieczenieType $ubezpieczenie
     */
    private $ubezpieczenie = null;

    /**
     * Deklaracja celna - "deprecated"
     *  - zalecane
     *  jest ustawianie
     *  elementu deklaracjaCelna2
     *
     * @var \TomaszKusy\En\DeklaracjaCelnaType $deklaracjaCelna
     */
    private $deklaracjaCelna = null;

    /**
     * @var \TomaszKusy\En\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    private $potwierdzenieDoreczenia = null;

    /**
     * @var \TomaszKusy\En\DeklaracjaCelna2Type $deklaracjaCelna2
     */
    private $deklaracjaCelna2 = null;

    /**
     * @var string $sposobNadaniaInterconnect
     */
    private $sposobNadaniaInterconnect = null;

    /**
     * @var \TomaszKusy\En\SposobDoreczeniaType $sposobDoreczenia
     */
    private $sposobDoreczenia = null;

    /**
     * Gets as typOpakowania
     *
     * @return string
     */
    public function getTypOpakowania()
    {
        return $this->typOpakowania;
    }

    /**
     * Sets a new typOpakowania
     *
     * @param string $typOpakowania
     * @return self
     */
    public function setTypOpakowania($typOpakowania)
    {
        $this->typOpakowania = $typOpakowania;
        return $this;
    }

    /**
     * Gets as masa
     *
     * @return int
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Sets a new masa
     *
     * @param int $masa
     * @return self
     */
    public function setMasa($masa)
    {
        $this->masa = $masa;
        return $this;
    }

    /**
     * Gets as zalaczoneDokumenty
     *
     * @return bool
     */
    public function getZalaczoneDokumenty()
    {
        return $this->zalaczoneDokumenty;
    }

    /**
     * Sets a new zalaczoneDokumenty
     *
     * @param bool $zalaczoneDokumenty
     * @return self
     */
    public function setZalaczoneDokumenty($zalaczoneDokumenty)
    {
        $this->zalaczoneDokumenty = $zalaczoneDokumenty;
        return $this;
    }

    /**
     * Gets as numerPrzesylkiKlienta
     *
     * @return string
     */
    public function getNumerPrzesylkiKlienta()
    {
        return $this->numerPrzesylkiKlienta;
    }

    /**
     * Sets a new numerPrzesylkiKlienta
     *
     * @param string $numerPrzesylkiKlienta
     * @return self
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        return $this;
    }

    /**
     * Gets as ubezpieczenie
     *
     * @return \TomaszKusy\En\UbezpieczenieType
     */
    public function getUbezpieczenie()
    {
        return $this->ubezpieczenie;
    }

    /**
     * Sets a new ubezpieczenie
     *
     * @param \TomaszKusy\En\UbezpieczenieType $ubezpieczenie
     * @return self
     */
    public function setUbezpieczenie(\TomaszKusy\En\UbezpieczenieType $ubezpieczenie)
    {
        $this->ubezpieczenie = $ubezpieczenie;
        return $this;
    }

    /**
     * Gets as deklaracjaCelna
     *
     * Deklaracja celna - "deprecated"
     *  - zalecane
     *  jest ustawianie
     *  elementu deklaracjaCelna2
     *
     * @return \TomaszKusy\En\DeklaracjaCelnaType
     */
    public function getDeklaracjaCelna()
    {
        return $this->deklaracjaCelna;
    }

    /**
     * Sets a new deklaracjaCelna
     *
     * Deklaracja celna - "deprecated"
     *  - zalecane
     *  jest ustawianie
     *  elementu deklaracjaCelna2
     *
     * @param \TomaszKusy\En\DeklaracjaCelnaType $deklaracjaCelna
     * @return self
     */
    public function setDeklaracjaCelna(\TomaszKusy\En\DeklaracjaCelnaType $deklaracjaCelna)
    {
        $this->deklaracjaCelna = $deklaracjaCelna;
        return $this;
    }

    /**
     * Gets as potwierdzenieDoreczenia
     *
     * @return \TomaszKusy\En\PotwierdzenieDoreczeniaType
     */
    public function getPotwierdzenieDoreczenia()
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * Sets a new potwierdzenieDoreczenia
     *
     * @param \TomaszKusy\En\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return self
     */
    public function setPotwierdzenieDoreczenia(\TomaszKusy\En\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia)
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        return $this;
    }

    /**
     * Gets as deklaracjaCelna2
     *
     * @return \TomaszKusy\En\DeklaracjaCelna2Type
     */
    public function getDeklaracjaCelna2()
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * Sets a new deklaracjaCelna2
     *
     * @param \TomaszKusy\En\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return self
     */
    public function setDeklaracjaCelna2(\TomaszKusy\En\DeklaracjaCelna2Type $deklaracjaCelna2)
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;
        return $this;
    }

    /**
     * Gets as sposobNadaniaInterconnect
     *
     * @return string
     */
    public function getSposobNadaniaInterconnect()
    {
        return $this->sposobNadaniaInterconnect;
    }

    /**
     * Sets a new sposobNadaniaInterconnect
     *
     * @param string $sposobNadaniaInterconnect
     * @return self
     */
    public function setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
    {
        $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;
        return $this;
    }

    /**
     * Gets as sposobDoreczenia
     *
     * @return \TomaszKusy\En\SposobDoreczeniaType
     */
    public function getSposobDoreczenia()
    {
        return $this->sposobDoreczenia;
    }

    /**
     * Sets a new sposobDoreczenia
     *
     * @param \TomaszKusy\En\SposobDoreczeniaType $sposobDoreczenia
     * @return self
     */
    public function setSposobDoreczenia(\TomaszKusy\En\SposobDoreczeniaType $sposobDoreczenia)
    {
        $this->sposobDoreczenia = $sposobDoreczenia;
        return $this;
    }


}

