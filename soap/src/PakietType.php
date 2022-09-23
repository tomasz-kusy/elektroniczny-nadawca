<?php

namespace TomaszKusy\En;

/**
 * Class representing PakietType
 *
 *
 * XSD Type: pakietType
 */
class PakietType
{

    /**
     * @var string $pakietGuid
     */
    private $pakietGuid = null;

    /**
     * @var string $miejsceOdbioru
     */
    private $miejsceOdbioru = null;

    /**
     * @var string $sposobNadania
     */
    private $sposobNadania = null;

    /**
     * Uwaga w tym miejscu wystarczy jak obiekt
     *  kierunke będzie miał ustawioną tylko własność id (nie jest
     *  potrzebne przesyłanie pełnego
     *  obiektu kierunekType pobranego z
     *  metody getKierunki)
     *
     * @var \TomaszKusy\En\KierunekType $kierunek
     */
    private $kierunek = null;

    /**
     * @var \TomaszKusy\En\OpakowanieType[] $opakowanie
     */
    private $opakowanie = [
        
    ];

    /**
     * @var string[] $czynnoscUpustowa
     */
    private $czynnoscUpustowa = [
        
    ];

    /**
     * Gets as pakietGuid
     *
     * @return string
     */
    public function getPakietGuid()
    {
        return $this->pakietGuid;
    }

    /**
     * Sets a new pakietGuid
     *
     * @param string $pakietGuid
     * @return self
     */
    public function setPakietGuid($pakietGuid)
    {
        $this->pakietGuid = $pakietGuid;
        return $this;
    }

    /**
     * Gets as miejsceOdbioru
     *
     * @return string
     */
    public function getMiejsceOdbioru()
    {
        return $this->miejsceOdbioru;
    }

    /**
     * Sets a new miejsceOdbioru
     *
     * @param string $miejsceOdbioru
     * @return self
     */
    public function setMiejsceOdbioru($miejsceOdbioru)
    {
        $this->miejsceOdbioru = $miejsceOdbioru;
        return $this;
    }

    /**
     * Gets as sposobNadania
     *
     * @return string
     */
    public function getSposobNadania()
    {
        return $this->sposobNadania;
    }

    /**
     * Sets a new sposobNadania
     *
     * @param string $sposobNadania
     * @return self
     */
    public function setSposobNadania($sposobNadania)
    {
        $this->sposobNadania = $sposobNadania;
        return $this;
    }

    /**
     * Gets as kierunek
     *
     * Uwaga w tym miejscu wystarczy jak obiekt
     *  kierunke będzie miał ustawioną tylko własność id (nie jest
     *  potrzebne przesyłanie pełnego
     *  obiektu kierunekType pobranego z
     *  metody getKierunki)
     *
     * @return \TomaszKusy\En\KierunekType
     */
    public function getKierunek()
    {
        return $this->kierunek;
    }

    /**
     * Sets a new kierunek
     *
     * Uwaga w tym miejscu wystarczy jak obiekt
     *  kierunke będzie miał ustawioną tylko własność id (nie jest
     *  potrzebne przesyłanie pełnego
     *  obiektu kierunekType pobranego z
     *  metody getKierunki)
     *
     * @param \TomaszKusy\En\KierunekType $kierunek
     * @return self
     */
    public function setKierunek(\TomaszKusy\En\KierunekType $kierunek)
    {
        $this->kierunek = $kierunek;
        return $this;
    }

    /**
     * Adds as opakowanie
     *
     * @return self
     * @param \TomaszKusy\En\OpakowanieType $opakowanie
     */
    public function addToOpakowanie(\TomaszKusy\En\OpakowanieType $opakowanie)
    {
        $this->opakowanie[] = $opakowanie;
        return $this;
    }

    /**
     * isset opakowanie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOpakowanie($index)
    {
        return isset($this->opakowanie[$index]);
    }

    /**
     * unset opakowanie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOpakowanie($index)
    {
        unset($this->opakowanie[$index]);
    }

    /**
     * Gets as opakowanie
     *
     * @return \TomaszKusy\En\OpakowanieType[]
     */
    public function getOpakowanie()
    {
        return $this->opakowanie;
    }

    /**
     * Sets a new opakowanie
     *
     * @param \TomaszKusy\En\OpakowanieType[] $opakowanie
     * @return self
     */
    public function setOpakowanie(array $opakowanie)
    {
        $this->opakowanie = $opakowanie;
        return $this;
    }

    /**
     * Adds as czynnoscUpustowa
     *
     * @return self
     * @param string $czynnoscUpustowa
     */
    public function addToCzynnoscUpustowa($czynnoscUpustowa)
    {
        $this->czynnoscUpustowa[] = $czynnoscUpustowa;
        return $this;
    }

    /**
     * isset czynnoscUpustowa
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCzynnoscUpustowa($index)
    {
        return isset($this->czynnoscUpustowa[$index]);
    }

    /**
     * unset czynnoscUpustowa
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCzynnoscUpustowa($index)
    {
        unset($this->czynnoscUpustowa[$index]);
    }

    /**
     * Gets as czynnoscUpustowa
     *
     * @return string[]
     */
    public function getCzynnoscUpustowa()
    {
        return $this->czynnoscUpustowa;
    }

    /**
     * Sets a new czynnoscUpustowa
     *
     * @param string $czynnoscUpustowa
     * @return self
     */
    public function setCzynnoscUpustowa(array $czynnoscUpustowa)
    {
        $this->czynnoscUpustowa = $czynnoscUpustowa;
        return $this;
    }


}

