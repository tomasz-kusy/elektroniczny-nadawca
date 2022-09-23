<?php

namespace TomaszKusy\En;

/**
 * Class representing PrzesylkaBiznesowaType
 *
 *
 * XSD Type: przesylkaBiznesowaType
 */
class PrzesylkaBiznesowaType extends PrzesylkaRejestrowanaType
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
     * @var string $gabaryt
     */
    private $gabaryt = null;

    /**
     * @var int $wartosc
     */
    private $wartosc = null;

    /**
     * @var bool $ostroznie
     */
    private $ostroznie = null;

    /**
     * @var string $numerTransakcjiOdbioru
     */
    private $numerTransakcjiOdbioru = null;

    /**
     * @var \TomaszKusy\En\PobranieType $pobranie
     */
    private $pobranie = null;

    /**
     * @var \TomaszKusy\En\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    private $urzadWydaniaEPrzesylki = null;

    /**
     * @var \TomaszKusy\En\SubPrzesylkaBiznesowaType[] $subPrzesylka
     */
    private $subPrzesylka = [
        
    ];

    /**
     * @var \TomaszKusy\En\UbezpieczenieType $ubezpieczenie
     */
    private $ubezpieczenie = null;

    /**
     * @var \TomaszKusy\En\EPOType $epo
     */
    private $epo = null;

    /**
     * @var \TomaszKusy\En\AdresType $adresDlaZwrotu
     */
    private $adresDlaZwrotu = null;

    /**
     * @var bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    private $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @var \TomaszKusy\En\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     */
    private $potwierdzenieOdbioru = null;

    /**
     * @var \TomaszKusy\En\DoreczenieBiznesowaType $doreczenie
     */
    private $doreczenie = null;

    /**
     * @var \TomaszKusy\En\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     */
    private $zwrotDokumentow = null;

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
     * Gets as gabaryt
     *
     * @return string
     */
    public function getGabaryt()
    {
        return $this->gabaryt;
    }

    /**
     * Sets a new gabaryt
     *
     * @param string $gabaryt
     * @return self
     */
    public function setGabaryt($gabaryt)
    {
        $this->gabaryt = $gabaryt;
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
     * @param \TomaszKusy\En\SubPrzesylkaBiznesowaType $subPrzesylka
     */
    public function addToSubPrzesylka(\TomaszKusy\En\SubPrzesylkaBiznesowaType $subPrzesylka)
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
     * @return \TomaszKusy\En\SubPrzesylkaBiznesowaType[]
     */
    public function getSubPrzesylka()
    {
        return $this->subPrzesylka;
    }

    /**
     * Sets a new subPrzesylka
     *
     * @param \TomaszKusy\En\SubPrzesylkaBiznesowaType[] $subPrzesylka
     * @return self
     */
    public function setSubPrzesylka(array $subPrzesylka)
    {
        $this->subPrzesylka = $subPrzesylka;
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
     * Gets as potwierdzenieOdbioru
     *
     * @return \TomaszKusy\En\PotwierdzenieOdbioruBiznesowaType
     */
    public function getPotwierdzenieOdbioru()
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Sets a new potwierdzenieOdbioru
     *
     * @param \TomaszKusy\En\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     * @return self
     */
    public function setPotwierdzenieOdbioru(\TomaszKusy\En\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru)
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
        return $this;
    }

    /**
     * Gets as doreczenie
     *
     * @return \TomaszKusy\En\DoreczenieBiznesowaType
     */
    public function getDoreczenie()
    {
        return $this->doreczenie;
    }

    /**
     * Sets a new doreczenie
     *
     * @param \TomaszKusy\En\DoreczenieBiznesowaType $doreczenie
     * @return self
     */
    public function setDoreczenie(\TomaszKusy\En\DoreczenieBiznesowaType $doreczenie)
    {
        $this->doreczenie = $doreczenie;
        return $this;
    }

    /**
     * Gets as zwrotDokumentow
     *
     * @return \TomaszKusy\En\ZwrotDokumentowBiznesowaType
     */
    public function getZwrotDokumentow()
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Sets a new zwrotDokumentow
     *
     * @param \TomaszKusy\En\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     * @return self
     */
    public function setZwrotDokumentow(\TomaszKusy\En\ZwrotDokumentowBiznesowaType $zwrotDokumentow)
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        return $this;
    }


}

