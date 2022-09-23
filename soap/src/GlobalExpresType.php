<?php

namespace TomaszKusy\En;

/**
 * Class representing GlobalExpresType
 *
 *
 * XSD Type: globalExpresType
 */
class GlobalExpresType extends PrzesylkaRejestrowanaType
{

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var bool $posteRestante
     */
    private $posteRestante = null;

    /**
     * Element określający zawartość przesyłki.
     *  Aktualnie dopuszczalne wartości:
     *  KORESPONDENCJA
     *  DOKUMENTY_PONIZEJ_250G
     *  DOKUMENTY_POWYZEJ_250G
     *  TOWARY
     *
     * @var string $zawartosc
     */
    private $zawartosc = null;

    /**
     * @var string $kategoria
     */
    private $kategoria = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    private $numerPrzesylkiKlienta = null;

    /**
     * @var \TomaszKusy\En\UbezpieczenieType $ubezpieczenie
     */
    private $ubezpieczenie = null;

    /**
     * @var \TomaszKusy\En\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    private $potwierdzenieDoreczenia = null;

    /**
     * @var \TomaszKusy\En\DeklaracjaCelna2Type $deklaracjaCelna2
     */
    private $deklaracjaCelna2 = null;

    /**
     * @var \TomaszKusy\En\SposobDoreczeniaType $sposobDoreczenia
     */
    private $sposobDoreczenia = null;

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
     * Gets as posteRestante
     *
     * @return bool
     */
    public function getPosteRestante()
    {
        return $this->posteRestante;
    }

    /**
     * Sets a new posteRestante
     *
     * @param bool $posteRestante
     * @return self
     */
    public function setPosteRestante($posteRestante)
    {
        $this->posteRestante = $posteRestante;
        return $this;
    }

    /**
     * Gets as zawartosc
     *
     * Element określający zawartość przesyłki.
     *  Aktualnie dopuszczalne wartości:
     *  KORESPONDENCJA
     *  DOKUMENTY_PONIZEJ_250G
     *  DOKUMENTY_POWYZEJ_250G
     *  TOWARY
     *
     * @return string
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Sets a new zawartosc
     *
     * Element określający zawartość przesyłki.
     *  Aktualnie dopuszczalne wartości:
     *  KORESPONDENCJA
     *  DOKUMENTY_PONIZEJ_250G
     *  DOKUMENTY_POWYZEJ_250G
     *  TOWARY
     *
     * @param string $zawartosc
     * @return self
     */
    public function setZawartosc($zawartosc)
    {
        $this->zawartosc = $zawartosc;
        return $this;
    }

    /**
     * Gets as kategoria
     *
     * @return string
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Sets a new kategoria
     *
     * @param string $kategoria
     * @return self
     */
    public function setKategoria($kategoria)
    {
        $this->kategoria = $kategoria;
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

