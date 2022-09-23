<?php

namespace TomaszKusy\En;

/**
 * Class representing PocztexKrajowyType
 *
 *
 * XSD Type: pocztexKrajowyType
 */
class PocztexKrajowyType extends PrzesylkaRejestrowanaType
{

    /**
     * @var bool $posteRestante
     */
    private $posteRestante = null;

    /**
     * @var string $terminRodzaj
     */
    private $terminRodzaj = null;

    /**
     * @var bool $kopertaFirmowa
     */
    private $kopertaFirmowa = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var int $wartosc
     */
    private $wartosc = null;

    /**
     * @var bool $ostroznie
     */
    private $ostroznie = null;

    /**
     * @var bool $ponadgabaryt
     */
    private $ponadgabaryt = null;

    /**
     * @var string $uiszczaOplate
     */
    private $uiszczaOplate = null;

    /**
     * @var int $odleglosc
     */
    private $odleglosc = null;

    /**
     * @var string $zawartosc
     */
    private $zawartosc = null;

    /**
     * @var bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    private $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @var \TomaszKusy\En\PobranieType $pobranie
     */
    private $pobranie = null;

    /**
     * @var \TomaszKusy\En\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     */
    private $odbiorPrzesylkiOdNadawcy = null;

    /**
     * @var \TomaszKusy\En\DoreczenieType $doreczenie
     */
    private $doreczenie = null;

    /**
     * @var \TomaszKusy\En\ZwrotDokumentowType $zwrotDokumentow
     */
    private $zwrotDokumentow = null;

    /**
     * @var \TomaszKusy\En\PotwierdzenieOdbioruType $potwierdzenieOdbioru
     */
    private $potwierdzenieOdbioru = null;

    /**
     * @var \TomaszKusy\En\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    private $potwierdzenieDoreczenia = null;

    /**
     * @var \TomaszKusy\En\UbezpieczenieType $ubezpieczenie
     */
    private $ubezpieczenie = null;

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
     * Gets as terminRodzaj
     *
     * @return string
     */
    public function getTerminRodzaj()
    {
        return $this->terminRodzaj;
    }

    /**
     * Sets a new terminRodzaj
     *
     * @param string $terminRodzaj
     * @return self
     */
    public function setTerminRodzaj($terminRodzaj)
    {
        $this->terminRodzaj = $terminRodzaj;
        return $this;
    }

    /**
     * Gets as kopertaFirmowa
     *
     * @return bool
     */
    public function getKopertaFirmowa()
    {
        return $this->kopertaFirmowa;
    }

    /**
     * Sets a new kopertaFirmowa
     *
     * @param bool $kopertaFirmowa
     * @return self
     */
    public function setKopertaFirmowa($kopertaFirmowa)
    {
        $this->kopertaFirmowa = $kopertaFirmowa;
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
     * Gets as wartosc
     *
     * @return int
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Sets a new wartosc
     *
     * @param int $wartosc
     * @return self
     */
    public function setWartosc($wartosc)
    {
        $this->wartosc = $wartosc;
        return $this;
    }

    /**
     * Gets as ostroznie
     *
     * @return bool
     */
    public function getOstroznie()
    {
        return $this->ostroznie;
    }

    /**
     * Sets a new ostroznie
     *
     * @param bool $ostroznie
     * @return self
     */
    public function setOstroznie($ostroznie)
    {
        $this->ostroznie = $ostroznie;
        return $this;
    }

    /**
     * Gets as ponadgabaryt
     *
     * @return bool
     */
    public function getPonadgabaryt()
    {
        return $this->ponadgabaryt;
    }

    /**
     * Sets a new ponadgabaryt
     *
     * @param bool $ponadgabaryt
     * @return self
     */
    public function setPonadgabaryt($ponadgabaryt)
    {
        $this->ponadgabaryt = $ponadgabaryt;
        return $this;
    }

    /**
     * Gets as uiszczaOplate
     *
     * @return string
     */
    public function getUiszczaOplate()
    {
        return $this->uiszczaOplate;
    }

    /**
     * Sets a new uiszczaOplate
     *
     * @param string $uiszczaOplate
     * @return self
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
        $this->uiszczaOplate = $uiszczaOplate;
        return $this;
    }

    /**
     * Gets as odleglosc
     *
     * @return int
     */
    public function getOdleglosc()
    {
        return $this->odleglosc;
    }

    /**
     * Sets a new odleglosc
     *
     * @param int $odleglosc
     * @return self
     */
    public function setOdleglosc($odleglosc)
    {
        $this->odleglosc = $odleglosc;
        return $this;
    }

    /**
     * Gets as zawartosc
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
     * @param string $zawartosc
     * @return self
     */
    public function setZawartosc($zawartosc)
    {
        $this->zawartosc = $zawartosc;
        return $this;
    }

    /**
     * Gets as sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     *
     * @return bool
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * Sets a new sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     *
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return self
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
        return $this;
    }

    /**
     * Gets as pobranie
     *
     * @return \TomaszKusy\En\PobranieType
     */
    public function getPobranie()
    {
        return $this->pobranie;
    }

    /**
     * Sets a new pobranie
     *
     * @param \TomaszKusy\En\PobranieType $pobranie
     * @return self
     */
    public function setPobranie(\TomaszKusy\En\PobranieType $pobranie)
    {
        $this->pobranie = $pobranie;
        return $this;
    }

    /**
     * Gets as odbiorPrzesylkiOdNadawcy
     *
     * @return \TomaszKusy\En\OdbiorPrzesylkiOdNadawcyType
     */
    public function getOdbiorPrzesylkiOdNadawcy()
    {
        return $this->odbiorPrzesylkiOdNadawcy;
    }

    /**
     * Sets a new odbiorPrzesylkiOdNadawcy
     *
     * @param \TomaszKusy\En\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @return self
     */
    public function setOdbiorPrzesylkiOdNadawcy(\TomaszKusy\En\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy)
    {
        $this->odbiorPrzesylkiOdNadawcy = $odbiorPrzesylkiOdNadawcy;
        return $this;
    }

    /**
     * Gets as doreczenie
     *
     * @return \TomaszKusy\En\DoreczenieType
     */
    public function getDoreczenie()
    {
        return $this->doreczenie;
    }

    /**
     * Sets a new doreczenie
     *
     * @param \TomaszKusy\En\DoreczenieType $doreczenie
     * @return self
     */
    public function setDoreczenie(\TomaszKusy\En\DoreczenieType $doreczenie)
    {
        $this->doreczenie = $doreczenie;
        return $this;
    }

    /**
     * Gets as zwrotDokumentow
     *
     * @return \TomaszKusy\En\ZwrotDokumentowType
     */
    public function getZwrotDokumentow()
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Sets a new zwrotDokumentow
     *
     * @param \TomaszKusy\En\ZwrotDokumentowType $zwrotDokumentow
     * @return self
     */
    public function setZwrotDokumentow(\TomaszKusy\En\ZwrotDokumentowType $zwrotDokumentow)
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        return $this;
    }

    /**
     * Gets as potwierdzenieOdbioru
     *
     * @return \TomaszKusy\En\PotwierdzenieOdbioruType
     */
    public function getPotwierdzenieOdbioru()
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Sets a new potwierdzenieOdbioru
     *
     * @param \TomaszKusy\En\PotwierdzenieOdbioruType $potwierdzenieOdbioru
     * @return self
     */
    public function setPotwierdzenieOdbioru(\TomaszKusy\En\PotwierdzenieOdbioruType $potwierdzenieOdbioru)
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
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


}

