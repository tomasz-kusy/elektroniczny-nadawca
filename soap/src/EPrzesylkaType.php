<?php

namespace TomaszKusy\En;

/**
 * Class representing EPrzesylkaType
 *
 *
 * XSD Type: ePrzesylkaType
 */
class EPrzesylkaType extends PrzesylkaRejestrowanaType
{

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var string $eSposobPowiadomieniaAdresata
     */
    private $eSposobPowiadomieniaAdresata = null;

    /**
     * @var string $eSposobPowiadomieniaNadawcy
     */
    private $eSposobPowiadomieniaNadawcy = null;

    /**
     * @var string $eKontaktAdresata
     */
    private $eKontaktAdresata = null;

    /**
     * @var string $eKontaktNadawcy
     */
    private $eKontaktNadawcy = null;

    /**
     * @var bool $ostroznie
     */
    private $ostroznie = null;

    /**
     * @var int $wartosc
     */
    private $wartosc = null;

    /**
     * @var \TomaszKusy\En\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    private $urzadWydaniaEPrzesylki = null;

    /**
     * @var \TomaszKusy\En\PobranieType $pobranie
     */
    private $pobranie = null;

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
     * Gets as eSposobPowiadomieniaAdresata
     *
     * @return string
     */
    public function getESposobPowiadomieniaAdresata()
    {
        return $this->eSposobPowiadomieniaAdresata;
    }

    /**
     * Sets a new eSposobPowiadomieniaAdresata
     *
     * @param string $eSposobPowiadomieniaAdresata
     * @return self
     */
    public function setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata)
    {
        $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;
        return $this;
    }

    /**
     * Gets as eSposobPowiadomieniaNadawcy
     *
     * @return string
     */
    public function getESposobPowiadomieniaNadawcy()
    {
        return $this->eSposobPowiadomieniaNadawcy;
    }

    /**
     * Sets a new eSposobPowiadomieniaNadawcy
     *
     * @param string $eSposobPowiadomieniaNadawcy
     * @return self
     */
    public function setESposobPowiadomieniaNadawcy($eSposobPowiadomieniaNadawcy)
    {
        $this->eSposobPowiadomieniaNadawcy = $eSposobPowiadomieniaNadawcy;
        return $this;
    }

    /**
     * Gets as eKontaktAdresata
     *
     * @return string
     */
    public function getEKontaktAdresata()
    {
        return $this->eKontaktAdresata;
    }

    /**
     * Sets a new eKontaktAdresata
     *
     * @param string $eKontaktAdresata
     * @return self
     */
    public function setEKontaktAdresata($eKontaktAdresata)
    {
        $this->eKontaktAdresata = $eKontaktAdresata;
        return $this;
    }

    /**
     * Gets as eKontaktNadawcy
     *
     * @return string
     */
    public function getEKontaktNadawcy()
    {
        return $this->eKontaktNadawcy;
    }

    /**
     * Sets a new eKontaktNadawcy
     *
     * @param string $eKontaktNadawcy
     * @return self
     */
    public function setEKontaktNadawcy($eKontaktNadawcy)
    {
        $this->eKontaktNadawcy = $eKontaktNadawcy;
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


}

