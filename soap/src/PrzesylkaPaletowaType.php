<?php

namespace TomaszKusy\En;

/**
 * Class representing PrzesylkaPaletowaType
 *
 *
 * XSD Type: przesylkaPaletowaType
 */
class PrzesylkaPaletowaType extends PrzesylkaRejestrowanaType
{

    /**
     * @var string $zawartosc
     */
    private $zawartosc = null;

    /**
     * @var int $masa
     */
    private $masa = null;

    /**
     * @var \DateTime $dataZaladunku
     */
    private $dataZaladunku = null;

    /**
     * @var \DateTime $dataDostawy
     */
    private $dataDostawy = null;

    /**
     * @var int $wartosc
     */
    private $wartosc = null;

    /**
     * @var int $iloscZwracanychPaletEUR
     */
    private $iloscZwracanychPaletEUR = null;

    /**
     * @var string $zalaczonaFV
     */
    private $zalaczonaFV = null;

    /**
     * @var string $zalaczonyWZ
     */
    private $zalaczonyWZ = null;

    /**
     * @var string $zalaczoneInne
     */
    private $zalaczoneInne = null;

    /**
     * @var string $zwracanaFV
     */
    private $zwracanaFV = null;

    /**
     * @var string $zwracanyWZ
     */
    private $zwracanyWZ = null;

    /**
     * @var string $zwracaneInne
     */
    private $zwracaneInne = null;

    /**
     * @var string $powiadomienieNadawcy
     */
    private $powiadomienieNadawcy = null;

    /**
     * @var string $powiadomienieOdbiorcy
     */
    private $powiadomienieOdbiorcy = null;

    /**
     * @var bool $dostawaWSobote
     */
    private $dostawaWSobote = null;

    /**
     * @var bool $przygotowanieDokumentowPrzewozowych
     */
    private $przygotowanieDokumentowPrzewozowych = null;

    /**
     * @var bool $dostawaSamochodemDedykowanym
     */
    private $dostawaSamochodemDedykowanym = null;

    /**
     * @var bool $zmianaDanychAdresowych
     */
    private $zmianaDanychAdresowych = null;

    /**
     * @var bool $ustalenieTerminuDostawy
     */
    private $ustalenieTerminuDostawy = null;

    /**
     * @var bool $samochodZWinda
     */
    private $samochodZWinda = null;

    /**
     * @var bool $zabranieOpakowania
     */
    private $zabranieOpakowania = null;

    /**
     * @var bool $wniesienie
     */
    private $wniesienie = null;

    /**
     * @var bool $awizoSMS
     */
    private $awizoSMS = null;

    /**
     * @var \TomaszKusy\En\AdresType $miejsceOdbioru
     */
    private $miejsceOdbioru = null;

    /**
     * @var \TomaszKusy\En\AdresType $miejsceDoreczenia
     */
    private $miejsceDoreczenia = null;

    /**
     * @var \TomaszKusy\En\PaletaType $paleta
     */
    private $paleta = null;

    /**
     * @var \TomaszKusy\En\PlatnikType $platnik
     */
    private $platnik = null;

    /**
     * @var \TomaszKusy\En\PobranieType $pobranie
     */
    private $pobranie = null;

    /**
     * @var \TomaszKusy\En\SubPrzesylkaPaletowaType[] $subPaleta
     */
    private $subPaleta = [
        
    ];

    /**
     * @var \TomaszKusy\En\DaneSentType[] $daneSent
     */
    private $daneSent = [
        
    ];

    /**
     * @var \TomaszKusy\En\AwizacjaType $awizacja
     */
    private $awizacja = null;

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
     * Gets as dataZaladunku
     *
     * @return \DateTime
     */
    public function getDataZaladunku()
    {
        return $this->dataZaladunku;
    }

    /**
     * Sets a new dataZaladunku
     *
     * @param \DateTime $dataZaladunku
     * @return self
     */
    public function setDataZaladunku(\DateTime $dataZaladunku)
    {
        $this->dataZaladunku = $dataZaladunku;
        return $this;
    }

    /**
     * Gets as dataDostawy
     *
     * @return \DateTime
     */
    public function getDataDostawy()
    {
        return $this->dataDostawy;
    }

    /**
     * Sets a new dataDostawy
     *
     * @param \DateTime $dataDostawy
     * @return self
     */
    public function setDataDostawy(\DateTime $dataDostawy)
    {
        $this->dataDostawy = $dataDostawy;
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
     * Gets as iloscZwracanychPaletEUR
     *
     * @return int
     */
    public function getIloscZwracanychPaletEUR()
    {
        return $this->iloscZwracanychPaletEUR;
    }

    /**
     * Sets a new iloscZwracanychPaletEUR
     *
     * @param int $iloscZwracanychPaletEUR
     * @return self
     */
    public function setIloscZwracanychPaletEUR($iloscZwracanychPaletEUR)
    {
        $this->iloscZwracanychPaletEUR = $iloscZwracanychPaletEUR;
        return $this;
    }

    /**
     * Gets as zalaczonaFV
     *
     * @return string
     */
    public function getZalaczonaFV()
    {
        return $this->zalaczonaFV;
    }

    /**
     * Sets a new zalaczonaFV
     *
     * @param string $zalaczonaFV
     * @return self
     */
    public function setZalaczonaFV($zalaczonaFV)
    {
        $this->zalaczonaFV = $zalaczonaFV;
        return $this;
    }

    /**
     * Gets as zalaczonyWZ
     *
     * @return string
     */
    public function getZalaczonyWZ()
    {
        return $this->zalaczonyWZ;
    }

    /**
     * Sets a new zalaczonyWZ
     *
     * @param string $zalaczonyWZ
     * @return self
     */
    public function setZalaczonyWZ($zalaczonyWZ)
    {
        $this->zalaczonyWZ = $zalaczonyWZ;
        return $this;
    }

    /**
     * Gets as zalaczoneInne
     *
     * @return string
     */
    public function getZalaczoneInne()
    {
        return $this->zalaczoneInne;
    }

    /**
     * Sets a new zalaczoneInne
     *
     * @param string $zalaczoneInne
     * @return self
     */
    public function setZalaczoneInne($zalaczoneInne)
    {
        $this->zalaczoneInne = $zalaczoneInne;
        return $this;
    }

    /**
     * Gets as zwracanaFV
     *
     * @return string
     */
    public function getZwracanaFV()
    {
        return $this->zwracanaFV;
    }

    /**
     * Sets a new zwracanaFV
     *
     * @param string $zwracanaFV
     * @return self
     */
    public function setZwracanaFV($zwracanaFV)
    {
        $this->zwracanaFV = $zwracanaFV;
        return $this;
    }

    /**
     * Gets as zwracanyWZ
     *
     * @return string
     */
    public function getZwracanyWZ()
    {
        return $this->zwracanyWZ;
    }

    /**
     * Sets a new zwracanyWZ
     *
     * @param string $zwracanyWZ
     * @return self
     */
    public function setZwracanyWZ($zwracanyWZ)
    {
        $this->zwracanyWZ = $zwracanyWZ;
        return $this;
    }

    /**
     * Gets as zwracaneInne
     *
     * @return string
     */
    public function getZwracaneInne()
    {
        return $this->zwracaneInne;
    }

    /**
     * Sets a new zwracaneInne
     *
     * @param string $zwracaneInne
     * @return self
     */
    public function setZwracaneInne($zwracaneInne)
    {
        $this->zwracaneInne = $zwracaneInne;
        return $this;
    }

    /**
     * Gets as powiadomienieNadawcy
     *
     * @return string
     */
    public function getPowiadomienieNadawcy()
    {
        return $this->powiadomienieNadawcy;
    }

    /**
     * Sets a new powiadomienieNadawcy
     *
     * @param string $powiadomienieNadawcy
     * @return self
     */
    public function setPowiadomienieNadawcy($powiadomienieNadawcy)
    {
        $this->powiadomienieNadawcy = $powiadomienieNadawcy;
        return $this;
    }

    /**
     * Gets as powiadomienieOdbiorcy
     *
     * @return string
     */
    public function getPowiadomienieOdbiorcy()
    {
        return $this->powiadomienieOdbiorcy;
    }

    /**
     * Sets a new powiadomienieOdbiorcy
     *
     * @param string $powiadomienieOdbiorcy
     * @return self
     */
    public function setPowiadomienieOdbiorcy($powiadomienieOdbiorcy)
    {
        $this->powiadomienieOdbiorcy = $powiadomienieOdbiorcy;
        return $this;
    }

    /**
     * Gets as dostawaWSobote
     *
     * @return bool
     */
    public function getDostawaWSobote()
    {
        return $this->dostawaWSobote;
    }

    /**
     * Sets a new dostawaWSobote
     *
     * @param bool $dostawaWSobote
     * @return self
     */
    public function setDostawaWSobote($dostawaWSobote)
    {
        $this->dostawaWSobote = $dostawaWSobote;
        return $this;
    }

    /**
     * Gets as przygotowanieDokumentowPrzewozowych
     *
     * @return bool
     */
    public function getPrzygotowanieDokumentowPrzewozowych()
    {
        return $this->przygotowanieDokumentowPrzewozowych;
    }

    /**
     * Sets a new przygotowanieDokumentowPrzewozowych
     *
     * @param bool $przygotowanieDokumentowPrzewozowych
     * @return self
     */
    public function setPrzygotowanieDokumentowPrzewozowych($przygotowanieDokumentowPrzewozowych)
    {
        $this->przygotowanieDokumentowPrzewozowych = $przygotowanieDokumentowPrzewozowych;
        return $this;
    }

    /**
     * Gets as dostawaSamochodemDedykowanym
     *
     * @return bool
     */
    public function getDostawaSamochodemDedykowanym()
    {
        return $this->dostawaSamochodemDedykowanym;
    }

    /**
     * Sets a new dostawaSamochodemDedykowanym
     *
     * @param bool $dostawaSamochodemDedykowanym
     * @return self
     */
    public function setDostawaSamochodemDedykowanym($dostawaSamochodemDedykowanym)
    {
        $this->dostawaSamochodemDedykowanym = $dostawaSamochodemDedykowanym;
        return $this;
    }

    /**
     * Gets as zmianaDanychAdresowych
     *
     * @return bool
     */
    public function getZmianaDanychAdresowych()
    {
        return $this->zmianaDanychAdresowych;
    }

    /**
     * Sets a new zmianaDanychAdresowych
     *
     * @param bool $zmianaDanychAdresowych
     * @return self
     */
    public function setZmianaDanychAdresowych($zmianaDanychAdresowych)
    {
        $this->zmianaDanychAdresowych = $zmianaDanychAdresowych;
        return $this;
    }

    /**
     * Gets as ustalenieTerminuDostawy
     *
     * @return bool
     */
    public function getUstalenieTerminuDostawy()
    {
        return $this->ustalenieTerminuDostawy;
    }

    /**
     * Sets a new ustalenieTerminuDostawy
     *
     * @param bool $ustalenieTerminuDostawy
     * @return self
     */
    public function setUstalenieTerminuDostawy($ustalenieTerminuDostawy)
    {
        $this->ustalenieTerminuDostawy = $ustalenieTerminuDostawy;
        return $this;
    }

    /**
     * Gets as samochodZWinda
     *
     * @return bool
     */
    public function getSamochodZWinda()
    {
        return $this->samochodZWinda;
    }

    /**
     * Sets a new samochodZWinda
     *
     * @param bool $samochodZWinda
     * @return self
     */
    public function setSamochodZWinda($samochodZWinda)
    {
        $this->samochodZWinda = $samochodZWinda;
        return $this;
    }

    /**
     * Gets as zabranieOpakowania
     *
     * @return bool
     */
    public function getZabranieOpakowania()
    {
        return $this->zabranieOpakowania;
    }

    /**
     * Sets a new zabranieOpakowania
     *
     * @param bool $zabranieOpakowania
     * @return self
     */
    public function setZabranieOpakowania($zabranieOpakowania)
    {
        $this->zabranieOpakowania = $zabranieOpakowania;
        return $this;
    }

    /**
     * Gets as wniesienie
     *
     * @return bool
     */
    public function getWniesienie()
    {
        return $this->wniesienie;
    }

    /**
     * Sets a new wniesienie
     *
     * @param bool $wniesienie
     * @return self
     */
    public function setWniesienie($wniesienie)
    {
        $this->wniesienie = $wniesienie;
        return $this;
    }

    /**
     * Gets as awizoSMS
     *
     * @return bool
     */
    public function getAwizoSMS()
    {
        return $this->awizoSMS;
    }

    /**
     * Sets a new awizoSMS
     *
     * @param bool $awizoSMS
     * @return self
     */
    public function setAwizoSMS($awizoSMS)
    {
        $this->awizoSMS = $awizoSMS;
        return $this;
    }

    /**
     * Gets as miejsceOdbioru
     *
     * @return \TomaszKusy\En\AdresType
     */
    public function getMiejsceOdbioru()
    {
        return $this->miejsceOdbioru;
    }

    /**
     * Sets a new miejsceOdbioru
     *
     * @param \TomaszKusy\En\AdresType $miejsceOdbioru
     * @return self
     */
    public function setMiejsceOdbioru(\TomaszKusy\En\AdresType $miejsceOdbioru)
    {
        $this->miejsceOdbioru = $miejsceOdbioru;
        return $this;
    }

    /**
     * Gets as miejsceDoreczenia
     *
     * @return \TomaszKusy\En\AdresType
     */
    public function getMiejsceDoreczenia()
    {
        return $this->miejsceDoreczenia;
    }

    /**
     * Sets a new miejsceDoreczenia
     *
     * @param \TomaszKusy\En\AdresType $miejsceDoreczenia
     * @return self
     */
    public function setMiejsceDoreczenia(\TomaszKusy\En\AdresType $miejsceDoreczenia)
    {
        $this->miejsceDoreczenia = $miejsceDoreczenia;
        return $this;
    }

    /**
     * Gets as paleta
     *
     * @return \TomaszKusy\En\PaletaType
     */
    public function getPaleta()
    {
        return $this->paleta;
    }

    /**
     * Sets a new paleta
     *
     * @param \TomaszKusy\En\PaletaType $paleta
     * @return self
     */
    public function setPaleta(\TomaszKusy\En\PaletaType $paleta)
    {
        $this->paleta = $paleta;
        return $this;
    }

    /**
     * Gets as platnik
     *
     * @return \TomaszKusy\En\PlatnikType
     */
    public function getPlatnik()
    {
        return $this->platnik;
    }

    /**
     * Sets a new platnik
     *
     * @param \TomaszKusy\En\PlatnikType $platnik
     * @return self
     */
    public function setPlatnik(\TomaszKusy\En\PlatnikType $platnik)
    {
        $this->platnik = $platnik;
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
     * Adds as subPaleta
     *
     * @return self
     * @param \TomaszKusy\En\SubPrzesylkaPaletowaType $subPaleta
     */
    public function addToSubPaleta(\TomaszKusy\En\SubPrzesylkaPaletowaType $subPaleta)
    {
        $this->subPaleta[] = $subPaleta;
        return $this;
    }

    /**
     * isset subPaleta
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubPaleta($index)
    {
        return isset($this->subPaleta[$index]);
    }

    /**
     * unset subPaleta
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubPaleta($index)
    {
        unset($this->subPaleta[$index]);
    }

    /**
     * Gets as subPaleta
     *
     * @return \TomaszKusy\En\SubPrzesylkaPaletowaType[]
     */
    public function getSubPaleta()
    {
        return $this->subPaleta;
    }

    /**
     * Sets a new subPaleta
     *
     * @param \TomaszKusy\En\SubPrzesylkaPaletowaType[] $subPaleta
     * @return self
     */
    public function setSubPaleta(array $subPaleta)
    {
        $this->subPaleta = $subPaleta;
        return $this;
    }

    /**
     * Adds as daneSent
     *
     * @return self
     * @param \TomaszKusy\En\DaneSentType $daneSent
     */
    public function addToDaneSent(\TomaszKusy\En\DaneSentType $daneSent)
    {
        $this->daneSent[] = $daneSent;
        return $this;
    }

    /**
     * isset daneSent
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDaneSent($index)
    {
        return isset($this->daneSent[$index]);
    }

    /**
     * unset daneSent
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDaneSent($index)
    {
        unset($this->daneSent[$index]);
    }

    /**
     * Gets as daneSent
     *
     * @return \TomaszKusy\En\DaneSentType[]
     */
    public function getDaneSent()
    {
        return $this->daneSent;
    }

    /**
     * Sets a new daneSent
     *
     * @param \TomaszKusy\En\DaneSentType[] $daneSent
     * @return self
     */
    public function setDaneSent(array $daneSent)
    {
        $this->daneSent = $daneSent;
        return $this;
    }

    /**
     * Gets as awizacja
     *
     * @return \TomaszKusy\En\AwizacjaType
     */
    public function getAwizacja()
    {
        return $this->awizacja;
    }

    /**
     * Sets a new awizacja
     *
     * @param \TomaszKusy\En\AwizacjaType $awizacja
     * @return self
     */
    public function setAwizacja(\TomaszKusy\En\AwizacjaType $awizacja)
    {
        $this->awizacja = $awizacja;
        return $this;
    }


}

