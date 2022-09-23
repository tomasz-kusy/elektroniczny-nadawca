<?php

namespace TomaszKusy\En;

/**
 * Class representing ProduktyInKartaType
 *
 *
 * XSD Type: produktyInKartaType
 */
class ProduktyInKartaType
{

    /**
     * @var \TomaszKusy\En\ProduktInKartaType[] $produktInKarta
     */
    private $produktInKarta = [
        
    ];

    /**
     * Adds as produktInKarta
     *
     * @return self
     * @param \TomaszKusy\En\ProduktInKartaType $produktInKarta
     */
    public function addToProduktInKarta(\TomaszKusy\En\ProduktInKartaType $produktInKarta)
    {
        $this->produktInKarta[] = $produktInKarta;
        return $this;
    }

    /**
     * isset produktInKarta
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduktInKarta($index)
    {
        return isset($this->produktInKarta[$index]);
    }

    /**
     * unset produktInKarta
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduktInKarta($index)
    {
        unset($this->produktInKarta[$index]);
    }

    /**
     * Gets as produktInKarta
     *
     * @return \TomaszKusy\En\ProduktInKartaType[]
     */
    public function getProduktInKarta()
    {
        return $this->produktInKarta;
    }

    /**
     * Sets a new produktInKarta
     *
     * @param \TomaszKusy\En\ProduktInKartaType[] $produktInKarta
     * @return self
     */
    public function setProduktInKarta(array $produktInKarta)
    {
        $this->produktInKarta = $produktInKarta;
        return $this;
    }


}

