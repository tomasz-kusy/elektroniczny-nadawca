<?php

namespace TomaszKusy\En\GetUrzedyWydajaceEPrzesylkiResponse;

/**
 * Class representing GetUrzedyWydajaceEPrzesylkiResponseAType
 */
class GetUrzedyWydajaceEPrzesylkiResponseAType
{

    /**
     * @var \TomaszKusy\En\UrzadWydaniaEPrzesylkiType[] $urzadWydaniaEPrzesylki
     */
    private $urzadWydaniaEPrzesylki = [
        
    ];

    /**
     * Adds as urzadWydaniaEPrzesylki
     *
     * @return self
     * @param \TomaszKusy\En\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    public function addToUrzadWydaniaEPrzesylki(\TomaszKusy\En\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki)
    {
        $this->urzadWydaniaEPrzesylki[] = $urzadWydaniaEPrzesylki;
        return $this;
    }

    /**
     * isset urzadWydaniaEPrzesylki
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUrzadWydaniaEPrzesylki($index)
    {
        return isset($this->urzadWydaniaEPrzesylki[$index]);
    }

    /**
     * unset urzadWydaniaEPrzesylki
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUrzadWydaniaEPrzesylki($index)
    {
        unset($this->urzadWydaniaEPrzesylki[$index]);
    }

    /**
     * Gets as urzadWydaniaEPrzesylki
     *
     * @return \TomaszKusy\En\UrzadWydaniaEPrzesylkiType[]
     */
    public function getUrzadWydaniaEPrzesylki()
    {
        return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * Sets a new urzadWydaniaEPrzesylki
     *
     * @param \TomaszKusy\En\UrzadWydaniaEPrzesylkiType[] $urzadWydaniaEPrzesylki
     * @return self
     */
    public function setUrzadWydaniaEPrzesylki(array $urzadWydaniaEPrzesylki)
    {
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        return $this;
    }


}

