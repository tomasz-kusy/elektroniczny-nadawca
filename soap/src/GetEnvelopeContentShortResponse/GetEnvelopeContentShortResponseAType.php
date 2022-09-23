<?php

namespace TomaszKusy\En\GetEnvelopeContentShortResponse;

/**
 * Class representing GetEnvelopeContentShortResponseAType
 */
class GetEnvelopeContentShortResponseAType
{

    /**
     * @var \TomaszKusy\En\PrzesylkaShortType[] $przesylka
     */
    private $przesylka = [
        
    ];

    /**
     * Adds as przesylka
     *
     * @return self
     * @param \TomaszKusy\En\PrzesylkaShortType $przesylka
     */
    public function addToPrzesylka(\TomaszKusy\En\PrzesylkaShortType $przesylka)
    {
        $this->przesylka[] = $przesylka;
        return $this;
    }

    /**
     * isset przesylka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrzesylka($index)
    {
        return isset($this->przesylka[$index]);
    }

    /**
     * unset przesylka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrzesylka($index)
    {
        unset($this->przesylka[$index]);
    }

    /**
     * Gets as przesylka
     *
     * @return \TomaszKusy\En\PrzesylkaShortType[]
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * Sets a new przesylka
     *
     * @param \TomaszKusy\En\PrzesylkaShortType[] $przesylka
     * @return self
     */
    public function setPrzesylka(array $przesylka)
    {
        $this->przesylka = $przesylka;
        return $this;
    }


}

