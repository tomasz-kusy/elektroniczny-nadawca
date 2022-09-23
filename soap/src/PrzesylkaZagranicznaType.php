<?php

namespace TomaszKusy\En;

/**
 * Class representing PrzesylkaZagranicznaType
 *
 *
 * XSD Type: przesylkaZagranicznaType
 */
class PrzesylkaZagranicznaType extends PrzesylkaNieRejestrowanaType
{

    /**
     * @var bool $posteRestante
     */
    private $posteRestante = null;

    /**
     * @var string $kategoria
     */
    private $kategoria = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var bool $ekspres
     */
    private $ekspres = null;

    /**
     * @var string $kraj
     */
    private $kraj = null;

    /**
     * @var \TomaszKusy\En\AdresType $adres
     */
    private $adres = null;

    /**
     * @var \TomaszKusy\En\AdresType $nadawca
     */
    private $nadawca = null;

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
     * Gets as ekspres
     *
     * @return bool
     */
    public function getEkspres()
    {
        return $this->ekspres;
    }

    /**
     * Sets a new ekspres
     *
     * @param bool $ekspres
     * @return self
     */
    public function setEkspres($ekspres)
    {
        $this->ekspres = $ekspres;
        return $this;
    }

    /**
     * Gets as kraj
     *
     * @return string
     */
    public function getKraj()
    {
        return $this->kraj;
    }

    /**
     * Sets a new kraj
     *
     * @param string $kraj
     * @return self
     */
    public function setKraj($kraj)
    {
        $this->kraj = $kraj;
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

