<?php

namespace TomaszKusy\En\GetPlacowkiPocztoweResponse;

/**
 * Class representing GetPlacowkiPocztoweResponseAType
 */
class GetPlacowkiPocztoweResponseAType
{

    /**
     * @var \TomaszKusy\En\PlacowkaPocztowaType[] $placowka
     */
    private $placowka = [
        
    ];

    /**
     * Adds as placowka
     *
     * @return self
     * @param \TomaszKusy\En\PlacowkaPocztowaType $placowka
     */
    public function addToPlacowka(\TomaszKusy\En\PlacowkaPocztowaType $placowka)
    {
        $this->placowka[] = $placowka;
        return $this;
    }

    /**
     * isset placowka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPlacowka($index)
    {
        return isset($this->placowka[$index]);
    }

    /**
     * unset placowka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPlacowka($index)
    {
        unset($this->placowka[$index]);
    }

    /**
     * Gets as placowka
     *
     * @return \TomaszKusy\En\PlacowkaPocztowaType[]
     */
    public function getPlacowka()
    {
        return $this->placowka;
    }

    /**
     * Sets a new placowka
     *
     * @param \TomaszKusy\En\PlacowkaPocztowaType[] $placowka
     * @return self
     */
    public function setPlacowka(array $placowka)
    {
        $this->placowka = $placowka;
        return $this;
    }


}

