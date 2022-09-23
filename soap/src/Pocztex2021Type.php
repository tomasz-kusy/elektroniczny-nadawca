<?php

namespace TomaszKusy\En;

/**
 * Class representing Pocztex2021Type
 *
 *
 * XSD Type: pocztex2021Type
 */
class Pocztex2021Type extends PrzesylkaRejestrowanaType
{

    /**
     * @var \TomaszKusy\En\PobranieType $pobranie
     */
    private $pobranie = null;

    /**
     * @var \TomaszKusy\En\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia
     */
    private $potwierdzenieDoreczenia = null;

    /**
     * @var \TomaszKusy\En\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru
     */
    private $potwierdzenieOdbioru = null;

    /**
     * @var \TomaszKusy\En\UbezpieczenieType $ubezpieczenie
     */
    private $ubezpieczenie = null;

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
     * @var string $format
     */
    private $format = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    private $numerPrzesylkiKlienta = null;

    /**
     * @var string $zwrotDokumentow
     */
    private $zwrotDokumentow = null;

    /**
     * @var int $idDokumentyZwrotneAdresy
     */
    private $idDokumentyZwrotneAdresy = null;

    /**
     * @var \TomaszKusy\En\EPOType $epo
     */
    private $epo = null;

    /**
     * @var \TomaszKusy\En\AdresType $adresDlaZwrotu
     */
    private $adresDlaZwrotu = null;

    /**
     * @var bool $odbiorWSobote
     */
    private $odbiorWSobote = null;

    /**
     * @var string $zasadySpecjalne
     */
    private $zasadySpecjalne = null;

    /**
     * @var \TomaszKusy\En\ZawartoscPocztex2021Type $zawartosc
     */
    private $zawartosc = null;

    /**
     * @var bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    private $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @var string $uiszczaOplate
     */
    private $uiszczaOplate = null;

    /**
     * @var bool $doreczenieDoRakWlasnych
     */
    private $doreczenieDoRakWlasnych = null;

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
     * Gets as potwierdzenieDoreczenia
     *
     * @return \TomaszKusy\En\PotwierdzenieEDoreczeniaType
     */
    public function getPotwierdzenieDoreczenia()
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * Sets a new potwierdzenieDoreczenia
     *
     * @param \TomaszKusy\En\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia
     * @return self
     */
    public function setPotwierdzenieDoreczenia(\TomaszKusy\En\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia)
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        return $this;
    }

    /**
     * Gets as potwierdzenieOdbioru
     *
     * @return \TomaszKusy\En\PotwierdzenieOdbioruPocztex2021Type
     */
    public function getPotwierdzenieOdbioru()
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Sets a new potwierdzenieOdbioru
     *
     * @param \TomaszKusy\En\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru
     * @return self
     */
    public function setPotwierdzenieOdbioru(\TomaszKusy\En\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru)
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
     * Gets as format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
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
     * Gets as zwrotDokumentow
     *
     * @return string
     */
    public function getZwrotDokumentow()
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Sets a new zwrotDokumentow
     *
     * @param string $zwrotDokumentow
     * @return self
     */
    public function setZwrotDokumentow($zwrotDokumentow)
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        return $this;
    }

    /**
     * Gets as idDokumentyZwrotneAdresy
     *
     * @return int
     */
    public function getIdDokumentyZwrotneAdresy()
    {
        return $this->idDokumentyZwrotneAdresy;
    }

    /**
     * Sets a new idDokumentyZwrotneAdresy
     *
     * @param int $idDokumentyZwrotneAdresy
     * @return self
     */
    public function setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy)
    {
        $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;
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

    /**
     * Gets as adresDlaZwrotu
     *
     * @return \TomaszKusy\En\AdresType
     */
    public function getAdresDlaZwrotu()
    {
        return $this->adresDlaZwrotu;
    }

    /**
     * Sets a new adresDlaZwrotu
     *
     * @param \TomaszKusy\En\AdresType $adresDlaZwrotu
     * @return self
     */
    public function setAdresDlaZwrotu(\TomaszKusy\En\AdresType $adresDlaZwrotu)
    {
        $this->adresDlaZwrotu = $adresDlaZwrotu;
        return $this;
    }

    /**
     * Gets as odbiorWSobote
     *
     * @return bool
     */
    public function getOdbiorWSobote()
    {
        return $this->odbiorWSobote;
    }

    /**
     * Sets a new odbiorWSobote
     *
     * @param bool $odbiorWSobote
     * @return self
     */
    public function setOdbiorWSobote($odbiorWSobote)
    {
        $this->odbiorWSobote = $odbiorWSobote;
        return $this;
    }

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
     * Gets as zawartosc
     *
     * @return \TomaszKusy\En\ZawartoscPocztex2021Type
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Sets a new zawartosc
     *
     * @param \TomaszKusy\En\ZawartoscPocztex2021Type $zawartosc
     * @return self
     */
    public function setZawartosc(\TomaszKusy\En\ZawartoscPocztex2021Type $zawartosc)
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
     * Gets as doreczenieDoRakWlasnych
     *
     * @return bool
     */
    public function getDoreczenieDoRakWlasnych()
    {
        return $this->doreczenieDoRakWlasnych;
    }

    /**
     * Sets a new doreczenieDoRakWlasnych
     *
     * @param bool $doreczenieDoRakWlasnych
     * @return self
     */
    public function setDoreczenieDoRakWlasnych($doreczenieDoRakWlasnych)
    {
        $this->doreczenieDoRakWlasnych = $doreczenieDoRakWlasnych;
        return $this;
    }


}

