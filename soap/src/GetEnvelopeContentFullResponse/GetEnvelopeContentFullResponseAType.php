<?php

namespace TomaszKusy\En\GetEnvelopeContentFullResponse;

/**
 * Class representing GetEnvelopeContentFullResponseAType
 */
class GetEnvelopeContentFullResponseAType
{

    /**
     * @var \TomaszKusy\En\PrzesylkaFullType[] $przesylka
     */
    private $przesylka = [
        
    ];

    /**
     * Adds as przesylka
     *
     * @return self
     * @param \TomaszKusy\En\PrzesylkaFullType $przesylka
     */
    public function addToPrzesylka(\TomaszKusy\En\PrzesylkaFullType $przesylka)
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
     * @return \TomaszKusy\En\PrzesylkaFullType[]
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * Sets a new przesylka
     *
     * @param \TomaszKusy\En\PrzesylkaFullType[] $przesylka
     * @return self
     */
    public function setPrzesylka(array $przesylka)
    {
        $this->przesylka = $przesylka;
        return $this;
    }


}

