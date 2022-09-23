<?php

namespace TomaszKusy\En;

/**
 * Class representing UslugaKurierskaType
 *
 *
 * XSD Type: uslugaKurierskaType
 */
class UslugaKurierskaType extends PrzesylkaRejestrowanaType
{

    /**
     * @var string $zasadySpecjalne
     */
    private $zasadySpecjalne = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var int $wartosc
     */
    private $wartosc = null;

    /**
     * @var bool $ponadgabaryt
     */
    private $ponadgabaryt = null;

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
     * @var bool $ostroznie
     */
    private $ostroznie = null;

    /**
     * @var string $uiszczaOplate
     */
    private $uiszczaOplate = null;

    /**
     * @var string $termin
     */
    private $termin = null;

    /**
     * @var string $opakowanie
     */
    private $opakowanie = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    private $numerPrzesylkiKlienta = null;

    /**
     * @var string $numerTransakcjiOdbioru
     */
    private $numerTransakcjiOdbioru = null;

    /**
     * @var \TomaszKusy\En\PobranieType $pobranie
     */
    private $pobranie = null;

    /**
     * @var \TomaszKusy\En\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     */
    private $odbiorPrzesylkiOdNadawcy = null;

    /**
     * @var \TomaszKusy\En\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    private $potwierdzenieDoreczenia = null;

    /**
     * @var \TomaszKusy\En\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    private $urzadWydaniaEPrzesylki = null;

    /**
     * @var \TomaszKusy\En\SubUslugaKurierskaType[] $subPrzesylka
     */
    private $subPrzesylka = [
        
    ];

    /**
     * @var \TomaszKusy\En\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     */
    private $potwierdzenieOdbioru = null;

    /**
     * @var \TomaszKusy\En\UbezpieczenieType $ubezpieczenie
     */
    private $ubezpieczenie = null;

    /**
     * @var \TomaszKusy\En\ZwrotDokumentowKurierskaType $zwrotDokumentow
     */
    private $zwrotDokumentow = null;

    /**
     * @var \TomaszKusy\En\DoreczenieUslugaKurierskaType $doreczenie
     */
    private $doreczenie = null;

    /**
     * @var \TomaszKusy\En\EPOType $epo
     */
    private $epo = null;

    /**
     * Gets as zasadySpecjalne
     *
     * @return string
     */
    public function getZasadySpecjalne()
    {
        return $this->zasadySpecjalne;
    }

    /**
     * Sets a new zasadySpecjalne
     *
     * @param string $zasadySpecjalne
     * @return self
     */
    public function setZasadySpecjalne($zasadySpecjalne)
    {
        $this->zasadySpecjalne = $zasadySpecjalne;
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
     * Gets as termin
     *
     * @return string
     */
    public function getTermin()
    {
        return $this->termin;
    }

    /**
     * Sets a new termin
     *
     * @param string $termin
     * @return self
     */
    public function setTermin($termin)
    {
        $this->termin = $termin;
        return $this;
    }

    /**
     * Gets as opakowanie
     *
     * @return string
     */
    public function getOpakowanie()
    {
        return $this->opakowanie;
    }

    /**
     * Sets a new opakowanie
     *
     * @param string $opakowanie
     * @return self
     */
    public function setOpakowanie($opakowanie)
    {
        $this->opakowanie = $opakowanie;
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
     * Gets as numerTransakcjiOdbioru
     *
     * @return string
     */
    public function getNumerTransakcjiOdbioru()
    {
        return $this->numerTransakcjiOdbioru;
    }

    /**
     * Sets a new numerTransakcjiOdbioru
     *
     * @param string $numerTransakcjiOdbioru
     * @return self
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
    {
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
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
     * Gets as urzadWydaniaEPrzesylki
     *
     * @return \TomaszKusy\En\UrzadWydaniaEPrzesylkiType
     */
    public function getUrzadWydaniaEPrzesylki()
    {
        return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * Sets a new urzadWydaniaEPrzesylki
     *
     * @param \TomaszKusy\En\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return self
     */
    public function setUrzadWydaniaEPrzesylki(\TomaszKusy\En\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki)
    {
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        return $this;
    }

    /**
     * Adds as subPrzesylka
     *
     * @return self
     * @param \TomaszKusy\En\SubUslugaKurierskaType $subPrzesylka
     */
    public function addToSubPrzesylka(\TomaszKusy\En\SubUslugaKurierskaType $subPrzesylka)
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
     * @return \TomaszKusy\En\SubUslugaKurierskaType[]
     */
    public function getSubPrzesylka()
    {
        return $this->subPrzesylka;
    }

    /**
     * Sets a new subPrzesylka
     *
     * @param \TomaszKusy\En\SubUslugaKurierskaType[] $subPrzesylka
     * @return self
     */
    public function setSubPrzesylka(array $subPrzesylka)
    {
        $this->subPrzesylka = $subPrzesylka;
        return $this;
    }

    /**
     * Gets as potwierdzenieOdbioru
     *
     * @return \TomaszKusy\En\PotwierdzenieOdbioruKurierskaType
     */
    public function getPotwierdzenieOdbioru()
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Sets a new potwierdzenieOdbioru
     *
     * @param \TomaszKusy\En\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     * @return self
     */
    public function setPotwierdzenieOdbioru(\TomaszKusy\En\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru)
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
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
     * Gets as zwrotDokumentow
     *
     * @return \TomaszKusy\En\ZwrotDokumentowKurierskaType
     */
    public function getZwrotDokumentow()
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Sets a new zwrotDokumentow
     *
     * @param \TomaszKusy\En\ZwrotDokumentowKurierskaType $zwrotDokumentow
     * @return self
     */
    public function setZwrotDokumentow(\TomaszKusy\En\ZwrotDokumentowKurierskaType $zwrotDokumentow)
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        return $this;
    }

    /**
     * Gets as doreczenie
     *
     * @return \TomaszKusy\En\DoreczenieUslugaKurierskaType
     */
    public function getDoreczenie()
    {
        return $this->doreczenie;
    }

    /**
     * Sets a new doreczenie
     *
     * @param \TomaszKusy\En\DoreczenieUslugaKurierskaType $doreczenie
     * @return self
     */
    public function setDoreczenie(\TomaszKusy\En\DoreczenieUslugaKurierskaType $doreczenie)
    {
        $this->doreczenie = $doreczenie;
        return $this;
    }

    /**
     * Gets as epo
     *
     * @return \TomaszKusy\En\EPOType
     */
    public function getEpo()
    {
        return $this->epo;
    }

    /**
     * Sets a new epo
     *
     * @param \TomaszKusy\En\EPOType $epo
     * @return self
     */
    public function setEpo(\TomaszKusy\En\EPOType $epo)
    {
        $this->epo = $epo;
        return $this;
    }


}

