<?php

namespace TomaszKusy\En\AddOdwolanieDoReklamacji;

/**
 * Class representing AddOdwolanieDoReklamacjiAType
 */
class AddOdwolanieDoReklamacjiAType
{

    /**
     * @var \TomaszKusy\En\ReklamowanaPrzesylkaType[] $reklamacja
     */
    private $reklamacja = [
        
    ];

    /**
     * Adds as reklamacja
     *
     * @return self
     * @param \TomaszKusy\En\ReklamowanaPrzesylkaType $reklamacja
     */
    public function addToReklamacja(\TomaszKusy\En\ReklamowanaPrzesylkaType $reklamacja)
    {
        $this->reklamacja[] = $reklamacja;
        return $this;
    }

    /**
     * isset reklamacja
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReklamacja($index)
    {
        return isset($this->reklamacja[$index]);
    }

    /**
     * unset reklamacja
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReklamacja($index)
    {
        unset($this->reklamacja[$index]);
    }

    /**
     * Gets as reklamacja
     *
     * @return \TomaszKusy\En\ReklamowanaPrzesylkaType[]
     */
    public function getReklamacja()
    {
        return $this->reklamacja;
    }

    /**
     * Sets a new reklamacja
     *
     * @param \TomaszKusy\En\ReklamowanaPrzesylkaType[] $reklamacja
     * @return self
     */
    public function setReklamacja(array $reklamacja)
    {
        $this->reklamacja = $reklamacja;
        return $this;
    }


}

