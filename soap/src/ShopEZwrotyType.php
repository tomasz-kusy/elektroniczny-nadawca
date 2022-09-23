<?php

namespace TomaszKusy\En;

/**
 * Class representing ShopEZwrotyType
 *
 *
 * XSD Type: shopEZwrotyType
 */
class ShopEZwrotyType
{

    /**
     * @var int $idShop
     */
    private $idShop = null;

    /**
     * @var string $nazwa
     */
    private $nazwa = null;

    /**
     * @var string $nazwa2
     */
    private $nazwa2 = null;

    /**
     * @var string $przyjaznaNazwa
     */
    private $przyjaznaNazwa = null;

    /**
     * @var string $ulica
     */
    private $ulica = null;

    /**
     * @var string $numerDomu
     */
    private $numerDomu = null;

    /**
     * @var string $numerLokalu
     */
    private $numerLokalu = null;

    /**
     * @var string $miejscowosc
     */
    private $miejscowosc = null;

    /**
     * @var string $kodPocztowy
     */
    private $kodPocztowy = null;

    /**
     * @var string $mobile
     */
    private $mobile = null;

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * @var string $nip
     */
    private $nip = null;

    /**
     * @var string $regon
     */
    private $regon = null;

    /**
     * @var string $krs
     */
    private $krs = null;

    /**
     * @var string $eZwrotTyp
     */
    private $eZwrotTyp = null;

    /**
     * @var string $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     */
    private $wymagalnoscNumeruIdentyfikujacegoPrzesylke = null;

    /**
     * @var bool $availableOnWebsite
     */
    private $availableOnWebsite = null;

    /**
     * @var string $emailForEZwrot
     */
    private $emailForEZwrot = null;

    /**
     * @var bool $paid
     */
    private $paid = null;

    /**
     * @var int $consentValidFor
     */
    private $consentValidFor = null;

    /**
     * @var int $contractorCost
     */
    private $contractorCost = null;

    /**
     * @var string $infoForClient
     */
    private $infoForClient = null;

    /**
     * @var string[] $eZwrotPrzesylki
     */
    private $eZwrotPrzesylki = [
        
    ];

    /**
     * @var \TomaszKusy\En\EZwrotKartaType $eZwrotKarta
     */
    private $eZwrotKarta = null;

    /**
     * Gets as idShop
     *
     * @return int
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Sets a new idShop
     *
     * @param int $idShop
     * @return self
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;
        return $this;
    }

    /**
     * Gets as nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Sets a new nazwa
     *
     * @param string $nazwa
     * @return self
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;
        return $this;
    }

    /**
     * Gets as nazwa2
     *
     * @return string
     */
    public function getNazwa2()
    {
        return $this->nazwa2;
    }

    /**
     * Sets a new nazwa2
     *
     * @param string $nazwa2
     * @return self
     */
    public function setNazwa2($nazwa2)
    {
        $this->nazwa2 = $nazwa2;
        return $this;
    }

    /**
     * Gets as przyjaznaNazwa
     *
     * @return string
     */
    public function getPrzyjaznaNazwa()
    {
        return $this->przyjaznaNazwa;
    }

    /**
     * Sets a new przyjaznaNazwa
     *
     * @param string $przyjaznaNazwa
     * @return self
     */
    public function setPrzyjaznaNazwa($przyjaznaNazwa)
    {
        $this->przyjaznaNazwa = $przyjaznaNazwa;
        return $this;
    }

    /**
     * Gets as ulica
     *
     * @return string
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Sets a new ulica
     *
     * @param string $ulica
     * @return self
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;
        return $this;
    }

    /**
     * Gets as numerDomu
     *
     * @return string
     */
    public function getNumerDomu()
    {
        return $this->numerDomu;
    }

    /**
     * Sets a new numerDomu
     *
     * @param string $numerDomu
     * @return self
     */
    public function setNumerDomu($numerDomu)
    {
        $this->numerDomu = $numerDomu;
        return $this;
    }

    /**
     * Gets as numerLokalu
     *
     * @return string
     */
    public function getNumerLokalu()
    {
        return $this->numerLokalu;
    }

    /**
     * Sets a new numerLokalu
     *
     * @param string $numerLokalu
     * @return self
     */
    public function setNumerLokalu($numerLokalu)
    {
        $this->numerLokalu = $numerLokalu;
        return $this;
    }

    /**
     * Gets as miejscowosc
     *
     * @return string
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }

    /**
     * Sets a new miejscowosc
     *
     * @param string $miejscowosc
     * @return self
     */
    public function setMiejscowosc($miejscowosc)
    {
        $this->miejscowosc = $miejscowosc;
        return $this;
    }

    /**
     * Gets as kodPocztowy
     *
     * @return string
     */
    public function getKodPocztowy()
    {
        return $this->kodPocztowy;
    }

    /**
     * Sets a new kodPocztowy
     *
     * @param string $kodPocztowy
     * @return self
     */
    public function setKodPocztowy($kodPocztowy)
    {
        $this->kodPocztowy = $kodPocztowy;
        return $this;
    }

    /**
     * Gets as mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets a new mobile
     *
     * @param string $mobile
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Sets a new nip
     *
     * @param string $nip
     * @return self
     */
    public function setNip($nip)
    {
        $this->nip = $nip;
        return $this;
    }

    /**
     * Gets as regon
     *
     * @return string
     */
    public function getRegon()
    {
        return $this->regon;
    }

    /**
     * Sets a new regon
     *
     * @param string $regon
     * @return self
     */
    public function setRegon($regon)
    {
        $this->regon = $regon;
        return $this;
    }

    /**
     * Gets as krs
     *
     * @return string
     */
    public function getKrs()
    {
        return $this->krs;
    }

    /**
     * Sets a new krs
     *
     * @param string $krs
     * @return self
     */
    public function setKrs($krs)
    {
        $this->krs = $krs;
        return $this;
    }

    /**
     * Gets as eZwrotTyp
     *
     * @return string
     */
    public function getEZwrotTyp()
    {
        return $this->eZwrotTyp;
    }

    /**
     * Sets a new eZwrotTyp
     *
     * @param string $eZwrotTyp
     * @return self
     */
    public function setEZwrotTyp($eZwrotTyp)
    {
        $this->eZwrotTyp = $eZwrotTyp;
        return $this;
    }

    /**
     * Gets as wymagalnoscNumeruIdentyfikujacegoPrzesylke
     *
     * @return string
     */
    public function getWymagalnoscNumeruIdentyfikujacegoPrzesylke()
    {
        return $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke;
    }

    /**
     * Sets a new wymagalnoscNumeruIdentyfikujacegoPrzesylke
     *
     * @param string $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     * @return self
     */
    public function setWymagalnoscNumeruIdentyfikujacegoPrzesylke($wymagalnoscNumeruIdentyfikujacegoPrzesylke)
    {
        $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke = $wymagalnoscNumeruIdentyfikujacegoPrzesylke;
        return $this;
    }

    /**
     * Gets as availableOnWebsite
     *
     * @return bool
     */
    public function getAvailableOnWebsite()
    {
        return $this->availableOnWebsite;
    }

    /**
     * Sets a new availableOnWebsite
     *
     * @param bool $availableOnWebsite
     * @return self
     */
    public function setAvailableOnWebsite($availableOnWebsite)
    {
        $this->availableOnWebsite = $availableOnWebsite;
        return $this;
    }

    /**
     * Gets as emailForEZwrot
     *
     * @return string
     */
    public function getEmailForEZwrot()
    {
        return $this->emailForEZwrot;
    }

    /**
     * Sets a new emailForEZwrot
     *
     * @param string $emailForEZwrot
     * @return self
     */
    public function setEmailForEZwrot($emailForEZwrot)
    {
        $this->emailForEZwrot = $emailForEZwrot;
        return $this;
    }

    /**
     * Gets as paid
     *
     * @return bool
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Sets a new paid
     *
     * @param bool $paid
     * @return self
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
        return $this;
    }

    /**
     * Gets as consentValidFor
     *
     * @return int
     */
    public function getConsentValidFor()
    {
        return $this->consentValidFor;
    }

    /**
     * Sets a new consentValidFor
     *
     * @param int $consentValidFor
     * @return self
     */
    public function setConsentValidFor($consentValidFor)
    {
        $this->consentValidFor = $consentValidFor;
        return $this;
    }

    /**
     * Gets as contractorCost
     *
     * @return int
     */
    public function getContractorCost()
    {
        return $this->contractorCost;
    }

    /**
     * Sets a new contractorCost
     *
     * @param int $contractorCost
     * @return self
     */
    public function setContractorCost($contractorCost)
    {
        $this->contractorCost = $contractorCost;
        return $this;
    }

    /**
     * Gets as infoForClient
     *
     * @return string
     */
    public function getInfoForClient()
    {
        return $this->infoForClient;
    }

    /**
     * Sets a new infoForClient
     *
     * @param string $infoForClient
     * @return self
     */
    public function setInfoForClient($infoForClient)
    {
        $this->infoForClient = $infoForClient;
        return $this;
    }

    /**
     * Adds as eZwrotPrzesylki
     *
     * @return self
     * @param string $eZwrotPrzesylki
     */
    public function addToEZwrotPrzesylki($eZwrotPrzesylki)
    {
        $this->eZwrotPrzesylki[] = $eZwrotPrzesylki;
        return $this;
    }

    /**
     * isset eZwrotPrzesylki
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEZwrotPrzesylki($index)
    {
        return isset($this->eZwrotPrzesylki[$index]);
    }

    /**
     * unset eZwrotPrzesylki
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEZwrotPrzesylki($index)
    {
        unset($this->eZwrotPrzesylki[$index]);
    }

    /**
     * Gets as eZwrotPrzesylki
     *
     * @return string[]
     */
    public function getEZwrotPrzesylki()
    {
        return $this->eZwrotPrzesylki;
    }

    /**
     * Sets a new eZwrotPrzesylki
     *
     * @param string $eZwrotPrzesylki
     * @return self
     */
    public function setEZwrotPrzesylki(array $eZwrotPrzesylki)
    {
        $this->eZwrotPrzesylki = $eZwrotPrzesylki;
        return $this;
    }

    /**
     * Gets as eZwrotKarta
     *
     * @return \TomaszKusy\En\EZwrotKartaType
     */
    public function getEZwrotKarta()
    {
        return $this->eZwrotKarta;
    }

    /**
     * Sets a new eZwrotKarta
     *
     * @param \TomaszKusy\En\EZwrotKartaType $eZwrotKarta
     * @return self
     */
    public function setEZwrotKarta(\TomaszKusy\En\EZwrotKartaType $eZwrotKarta)
    {
        $this->eZwrotKarta = $eZwrotKarta;
        return $this;
    }


}

