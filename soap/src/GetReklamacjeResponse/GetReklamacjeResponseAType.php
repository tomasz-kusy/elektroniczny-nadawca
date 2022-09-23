<?php

namespace TomaszKusy\En\GetReklamacjeResponse;

/**
 * Class representing GetReklamacjeResponseAType
 */
class GetReklamacjeResponseAType
{

    /**
     * @var \TomaszKusy\En\ReklamacjaRozpatrzonaType[] $reklamacja
     */
    private $reklamacja = [
        
    ];

    /**
     * Adds as reklamacja
     *
     * @return self
     * @param \TomaszKusy\En\ReklamacjaRozpatrzonaType $reklamacja
     */
    public function addToReklamacja(\TomaszKusy\En\ReklamacjaRozpatrzonaType $reklamacja)
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
     * @return \TomaszKusy\En\ReklamacjaRozpatrzonaType[]
     */
    public function getReklamacja()
    {
        return $this->reklamacja;
    }

    /**
     * Sets a new reklamacja
     *
     * @param \TomaszKusy\En\ReklamacjaRozpatrzonaType[] $reklamacja
     * @return self
     */
    public function setReklamacja(array $reklamacja)
    {
        $this->reklamacja = $reklamacja;
        return $this;
    }


}

