<?php

namespace TomaszKusy\En\GetUrzedyNadaniaResponse;

/**
 * Class representing GetUrzedyNadaniaResponseAType
 */
class GetUrzedyNadaniaResponseAType
{

    /**
     * @var \TomaszKusy\En\UrzadNadaniaFullType[] $urzedyNadania
     */
    private $urzedyNadania = [
        
    ];

    /**
     * Adds as urzedyNadania
     *
     * @return self
     * @param \TomaszKusy\En\UrzadNadaniaFullType $urzedyNadania
     */
    public function addToUrzedyNadania(\TomaszKusy\En\UrzadNadaniaFullType $urzedyNadania)
    {
        $this->urzedyNadania[] = $urzedyNadania;
        return $this;
    }

    /**
     * isset urzedyNadania
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUrzedyNadania($index)
    {
        return isset($this->urzedyNadania[$index]);
    }

    /**
     * unset urzedyNadania
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUrzedyNadania($index)
    {
        unset($this->urzedyNadania[$index]);
    }

    /**
     * Gets as urzedyNadania
     *
     * @return \TomaszKusy\En\UrzadNadaniaFullType[]
     */
    public function getUrzedyNadania()
    {
        return $this->urzedyNadania;
    }

    /**
     * Sets a new urzedyNadania
     *
     * @param \TomaszKusy\En\UrzadNadaniaFullType[] $urzedyNadania
     * @return self
     */
    public function setUrzedyNadania(array $urzedyNadania)
    {
        $this->urzedyNadania = $urzedyNadania;
        return $this;
    }


}

