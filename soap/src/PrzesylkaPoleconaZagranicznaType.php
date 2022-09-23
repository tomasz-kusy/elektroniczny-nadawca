<?php

namespace TomaszKusy\En;

/**
 * Class representing PrzesylkaPoleconaZagranicznaType
 *
 *
 * XSD Type: przesylkaPoleconaZagranicznaType
 */
class PrzesylkaPoleconaZagranicznaType extends PrzesylkaRejestrowanaType
{

    /**
     * @var bool $posteRestante
     */
    private $posteRestante = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var int $iloscPotwierdzenOdbioru
     */
    private $iloscPotwierdzenOdbioru = null;

    /**
     * @var \TomaszKusy\En\DeklaracjaCelna2Type $deklaracjaCelna2
     */
    private $deklaracjaCelna2 = null;

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
     * Gets as iloscPotwierdzenOdbioru
     *
     * @return int
     */
    public function getIloscPotwierdzenOdbioru()
    {
        return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * Sets a new iloscPotwierdzenOdbioru
     *
     * @param int $iloscPotwierdzenOdbioru
     * @return self
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
    {
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
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


}

