<?php

namespace TomaszKusy\En;

/**
 * Class representing PlacowkaPocztowaType
 *
 *
 * XSD Type: placowkaPocztowaType
 */
class PlacowkaPocztowaType
{

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $prefixNazwy
     */
    private $prefixNazwy = null;

    /**
     * @var string $nazwa
     */
    private $nazwa = null;

    /**
     * @var string $wojewodztwo
     */
    private $wojewodztwo = null;

    /**
     * @var string $powiat
     */
    private $powiat = null;

    /**
     * @var string $miejsce
     */
    private $miejsce = null;

    /**
     * @var string $kodPocztowy
     */
    private $kodPocztowy = null;

    /**
     * @var string $miejscowosc
     */
    private $miejscowosc = null;

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
     * Pole dedykowane do wykorzystania na nalepkach
     *  adresowych przy określaniu punktu odbioru
     *
     * @var string $nazwaWydruk
     */
    private $nazwaWydruk = null;

    /**
     * @var bool $punktWydaniaEPrzesylki
     */
    private $punktWydaniaEPrzesylki = null;

    /**
     * @var bool $powiadomienieSMS
     */
    private $powiadomienieSMS = null;

    /**
     * @var bool $punktWydaniaPrzesylkiBiznesowejPlus
     */
    private $punktWydaniaPrzesylkiBiznesowejPlus = null;

    /**
     * @var bool $punktWydaniaPrzesylkiBiznesowej
     */
    private $punktWydaniaPrzesylkiBiznesowej = null;

    /**
     * @var string $siecPlacowek
     */
    private $siecPlacowek = null;

    /**
     * @var string $idZPO
     */
    private $idZPO = null;

    /**
     * @var \TomaszKusy\En\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     */
    private $lokalizacjaGeograficzna = null;

    /**
     * @var \TomaszKusy\En\DeliveryPathType $deliveryPath
     */
    private $deliveryPath = null;

    /**
     * Gets as id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as prefixNazwy
     *
     * @return string
     */
    public function getPrefixNazwy()
    {
        return $this->prefixNazwy;
    }

    /**
     * Sets a new prefixNazwy
     *
     * @param string $prefixNazwy
     * @return self
     */
    public function setPrefixNazwy($prefixNazwy)
    {
        $this->prefixNazwy = $prefixNazwy;
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
     * Gets as wojewodztwo
     *
     * @return string
     */
    public function getWojewodztwo()
    {
        return $this->wojewodztwo;
    }

    /**
     * Sets a new wojewodztwo
     *
     * @param string $wojewodztwo
     * @return self
     */
    public function setWojewodztwo($wojewodztwo)
    {
        $this->wojewodztwo = $wojewodztwo;
        return $this;
    }

    /**
     * Gets as powiat
     *
     * @return string
     */
    public function getPowiat()
    {
        return $this->powiat;
    }

    /**
     * Sets a new powiat
     *
     * @param string $powiat
     * @return self
     */
    public function setPowiat($powiat)
    {
        $this->powiat = $powiat;
        return $this;
    }

    /**
     * Gets as miejsce
     *
     * @return string
     */
    public function getMiejsce()
    {
        return $this->miejsce;
    }

    /**
     * Sets a new miejsce
     *
     * @param string $miejsce
     * @return self
     */
    public function setMiejsce($miejsce)
    {
        $this->miejsce = $miejsce;
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
     * Gets as nazwaWydruk
     *
     * Pole dedykowane do wykorzystania na nalepkach
     *  adresowych przy określaniu punktu odbioru
     *
     * @return string
     */
    public function getNazwaWydruk()
    {
        return $this->nazwaWydruk;
    }

    /**
     * Sets a new nazwaWydruk
     *
     * Pole dedykowane do wykorzystania na nalepkach
     *  adresowych przy określaniu punktu odbioru
     *
     * @param string $nazwaWydruk
     * @return self
     */
    public function setNazwaWydruk($nazwaWydruk)
    {
        $this->nazwaWydruk = $nazwaWydruk;
        return $this;
    }

    /**
     * Gets as punktWydaniaEPrzesylki
     *
     * @return bool
     */
    public function getPunktWydaniaEPrzesylki()
    {
        return $this->punktWydaniaEPrzesylki;
    }

    /**
     * Sets a new punktWydaniaEPrzesylki
     *
     * @param bool $punktWydaniaEPrzesylki
     * @return self
     */
    public function setPunktWydaniaEPrzesylki($punktWydaniaEPrzesylki)
    {
        $this->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;
        return $this;
    }

    /**
     * Gets as powiadomienieSMS
     *
     * @return bool
     */
    public function getPowiadomienieSMS()
    {
        return $this->powiadomienieSMS;
    }

    /**
     * Sets a new powiadomienieSMS
     *
     * @param bool $powiadomienieSMS
     * @return self
     */
    public function setPowiadomienieSMS($powiadomienieSMS)
    {
        $this->powiadomienieSMS = $powiadomienieSMS;
        return $this;
    }

    /**
     * Gets as punktWydaniaPrzesylkiBiznesowejPlus
     *
     * @return bool
     */
    public function getPunktWydaniaPrzesylkiBiznesowejPlus()
    {
        return $this->punktWydaniaPrzesylkiBiznesowejPlus;
    }

    /**
     * Sets a new punktWydaniaPrzesylkiBiznesowejPlus
     *
     * @param bool $punktWydaniaPrzesylkiBiznesowejPlus
     * @return self
     */
    public function setPunktWydaniaPrzesylkiBiznesowejPlus($punktWydaniaPrzesylkiBiznesowejPlus)
    {
        $this->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;
        return $this;
    }

    /**
     * Gets as punktWydaniaPrzesylkiBiznesowej
     *
     * @return bool
     */
    public function getPunktWydaniaPrzesylkiBiznesowej()
    {
        return $this->punktWydaniaPrzesylkiBiznesowej;
    }

    /**
     * Sets a new punktWydaniaPrzesylkiBiznesowej
     *
     * @param bool $punktWydaniaPrzesylkiBiznesowej
     * @return self
     */
    public function setPunktWydaniaPrzesylkiBiznesowej($punktWydaniaPrzesylkiBiznesowej)
    {
        $this->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;
        return $this;
    }

    /**
     * Gets as siecPlacowek
     *
     * @return string
     */
    public function getSiecPlacowek()
    {
        return $this->siecPlacowek;
    }

    /**
     * Sets a new siecPlacowek
     *
     * @param string $siecPlacowek
     * @return self
     */
    public function setSiecPlacowek($siecPlacowek)
    {
        $this->siecPlacowek = $siecPlacowek;
        return $this;
    }

    /**
     * Gets as idZPO
     *
     * @return string
     */
    public function getIdZPO()
    {
        return $this->idZPO;
    }

    /**
     * Sets a new idZPO
     *
     * @param string $idZPO
     * @return self
     */
    public function setIdZPO($idZPO)
    {
        $this->idZPO = $idZPO;
        return $this;
    }

    /**
     * Gets as lokalizacjaGeograficzna
     *
     * @return \TomaszKusy\En\LokalizacjaGeograficznaType
     */
    public function getLokalizacjaGeograficzna()
    {
        return $this->lokalizacjaGeograficzna;
    }

    /**
     * Sets a new lokalizacjaGeograficzna
     *
     * @param \TomaszKusy\En\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @return self
     */
    public function setLokalizacjaGeograficzna(\TomaszKusy\En\LokalizacjaGeograficznaType $lokalizacjaGeograficzna)
    {
        $this->lokalizacjaGeograficzna = $lokalizacjaGeograficzna;
        return $this;
    }

    /**
     * Gets as deliveryPath
     *
     * @return \TomaszKusy\En\DeliveryPathType
     */
    public function getDeliveryPath()
    {
        return $this->deliveryPath;
    }

    /**
     * Sets a new deliveryPath
     *
     * @param \TomaszKusy\En\DeliveryPathType $deliveryPath
     * @return self
     */
    public function setDeliveryPath(\TomaszKusy\En\DeliveryPathType $deliveryPath)
    {
        $this->deliveryPath = $deliveryPath;
        return $this;
    }


}

