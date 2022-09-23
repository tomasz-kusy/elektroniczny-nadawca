<?php

namespace TomaszKusy\En\IsObszarMiasto;

/**
 * Class representing IsObszarMiastoAType
 */
class IsObszarMiastoAType
{

    /**
     * @var \TomaszKusy\En\ObszarAdresowyType[] $adres
     */
    private $adres = [
        
    ];

    /**
     * Adds as adres
     *
     * @return self
     * @param \TomaszKusy\En\ObszarAdresowyType $adres
     */
    public function addToAdres(\TomaszKusy\En\ObszarAdresowyType $adres)
    {
        $this->adres[] = $adres;
        return $this;
    }

    /**
     * isset adres
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdres($index)
    {
        return isset($this->adres[$index]);
    }

    /**
     * unset adres
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdres($index)
    {
        unset($this->adres[$index]);
    }

    /**
     * Gets as adres
     *
     * @return \TomaszKusy\En\ObszarAdresowyType[]
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \TomaszKusy\En\ObszarAdresowyType[] $adres
     * @return self
     */
    public function setAdres(array $adres)
    {
        $this->adres = $adres;
        return $this;
    }


}

