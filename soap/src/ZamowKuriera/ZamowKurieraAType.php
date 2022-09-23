<?php

namespace TomaszKusy\En\ZamowKuriera;

/**
 * Class representing ZamowKurieraAType
 */
class ZamowKurieraAType
{

    /**
     * @var \TomaszKusy\En\AdresType $miejsceOdbioru
     */
    private $miejsceOdbioru = null;

    /**
     * @var \TomaszKusy\En\AdresType $nadawca
     */
    private $nadawca = null;

    /**
     * @var string $oczekiwanaDataOdbioru
     */
    private $oczekiwanaDataOdbioru = null;

    /**
     * @var string $oczekiwanaGodzinaOdbioru
     */
    private $oczekiwanaGodzinaOdbioru = null;

    /**
     * @var string $szacowanaIloscPrzeslek
     */
    private $szacowanaIloscPrzeslek = null;

    /**
     * @var string $szacowanaLacznaMasaPrzesylek
     */
    private $szacowanaLacznaMasaPrzesylek = null;

    /**
     * @var string $potwierdzenieZamowieniaEmail
     */
    private $potwierdzenieZamowieniaEmail = null;

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
     * Gets as oczekiwanaDataOdbioru
     *
     * @return string
     */
    public function getOczekiwanaDataOdbioru()
    {
        return $this->oczekiwanaDataOdbioru;
    }

    /**
     * Sets a new oczekiwanaDataOdbioru
     *
     * @param string $oczekiwanaDataOdbioru
     * @return self
     */
    public function setOczekiwanaDataOdbioru($oczekiwanaDataOdbioru)
    {
        $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;
        return $this;
    }

    /**
     * Gets as oczekiwanaGodzinaOdbioru
     *
     * @return string
     */
    public function getOczekiwanaGodzinaOdbioru()
    {
        return $this->oczekiwanaGodzinaOdbioru;
    }

    /**
     * Sets a new oczekiwanaGodzinaOdbioru
     *
     * @param string $oczekiwanaGodzinaOdbioru
     * @return self
     */
    public function setOczekiwanaGodzinaOdbioru($oczekiwanaGodzinaOdbioru)
    {
        $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;
        return $this;
    }

    /**
     * Gets as szacowanaIloscPrzeslek
     *
     * @return string
     */
    public function getSzacowanaIloscPrzeslek()
    {
        return $this->szacowanaIloscPrzeslek;
    }

    /**
     * Sets a new szacowanaIloscPrzeslek
     *
     * @param string $szacowanaIloscPrzeslek
     * @return self
     */
    public function setSzacowanaIloscPrzeslek($szacowanaIloscPrzeslek)
    {
        $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;
        return $this;
    }

    /**
     * Gets as szacowanaLacznaMasaPrzesylek
     *
     * @return string
     */
    public function getSzacowanaLacznaMasaPrzesylek()
    {
        return $this->szacowanaLacznaMasaPrzesylek;
    }

    /**
     * Sets a new szacowanaLacznaMasaPrzesylek
     *
     * @param string $szacowanaLacznaMasaPrzesylek
     * @return self
     */
    public function setSzacowanaLacznaMasaPrzesylek($szacowanaLacznaMasaPrzesylek)
    {
        $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;
        return $this;
    }

    /**
     * Gets as potwierdzenieZamowieniaEmail
     *
     * @return string
     */
    public function getPotwierdzenieZamowieniaEmail()
    {
        return $this->potwierdzenieZamowieniaEmail;
    }

    /**
     * Sets a new potwierdzenieZamowieniaEmail
     *
     * @param string $potwierdzenieZamowieniaEmail
     * @return self
     */
    public function setPotwierdzenieZamowieniaEmail($potwierdzenieZamowieniaEmail)
    {
        $this->potwierdzenieZamowieniaEmail = $potwierdzenieZamowieniaEmail;
        return $this;
    }


}

