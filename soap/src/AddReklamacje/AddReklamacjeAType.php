<?php

namespace TomaszKusy\En\AddReklamacje;

/**
 * Class representing AddReklamacjeAType
 */
class AddReklamacjeAType
{

    /**
     * @var \TomaszKusy\En\ReklamowanaPrzesylkaType[] $reklamowanaPrzesylka
     */
    private $reklamowanaPrzesylka = [
        
    ];

    /**
     * Adds as reklamowanaPrzesylka
     *
     * @return self
     * @param \TomaszKusy\En\ReklamowanaPrzesylkaType $reklamowanaPrzesylka
     */
    public function addToReklamowanaPrzesylka(\TomaszKusy\En\ReklamowanaPrzesylkaType $reklamowanaPrzesylka)
    {
        $this->reklamowanaPrzesylka[] = $reklamowanaPrzesylka;
        return $this;
    }

    /**
     * isset reklamowanaPrzesylka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReklamowanaPrzesylka($index)
    {
        return isset($this->reklamowanaPrzesylka[$index]);
    }

    /**
     * unset reklamowanaPrzesylka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReklamowanaPrzesylka($index)
    {
        unset($this->reklamowanaPrzesylka[$index]);
    }

    /**
     * Gets as reklamowanaPrzesylka
     *
     * @return \TomaszKusy\En\ReklamowanaPrzesylkaType[]
     */
    public function getReklamowanaPrzesylka()
    {
        return $this->reklamowanaPrzesylka;
    }

    /**
     * Sets a new reklamowanaPrzesylka
     *
     * @param \TomaszKusy\En\ReklamowanaPrzesylkaType[] $reklamowanaPrzesylka
     * @return self
     */
    public function setReklamowanaPrzesylka(array $reklamowanaPrzesylka)
    {
        $this->reklamowanaPrzesylka = $reklamowanaPrzesylka;
        return $this;
    }


}

