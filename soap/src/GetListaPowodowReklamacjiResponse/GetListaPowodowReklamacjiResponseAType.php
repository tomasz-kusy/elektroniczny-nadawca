<?php

namespace TomaszKusy\En\GetListaPowodowReklamacjiResponse;

/**
 * Class representing GetListaPowodowReklamacjiResponseAType
 */
class GetListaPowodowReklamacjiResponseAType
{

    /**
     * @var \TomaszKusy\En\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     */
    private $kategoriePowodowReklamacji = [
        
    ];

    /**
     * Adds as kategoriePowodowReklamacji
     *
     * @return self
     * @param \TomaszKusy\En\KategoriePowodowReklamacjiType $kategoriePowodowReklamacji
     */
    public function addToKategoriePowodowReklamacji(\TomaszKusy\En\KategoriePowodowReklamacjiType $kategoriePowodowReklamacji)
    {
        $this->kategoriePowodowReklamacji[] = $kategoriePowodowReklamacji;
        return $this;
    }

    /**
     * isset kategoriePowodowReklamacji
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKategoriePowodowReklamacji($index)
    {
        return isset($this->kategoriePowodowReklamacji[$index]);
    }

    /**
     * unset kategoriePowodowReklamacji
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKategoriePowodowReklamacji($index)
    {
        unset($this->kategoriePowodowReklamacji[$index]);
    }

    /**
     * Gets as kategoriePowodowReklamacji
     *
     * @return \TomaszKusy\En\KategoriePowodowReklamacjiType[]
     */
    public function getKategoriePowodowReklamacji()
    {
        return $this->kategoriePowodowReklamacji;
    }

    /**
     * Sets a new kategoriePowodowReklamacji
     *
     * @param \TomaszKusy\En\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     * @return self
     */
    public function setKategoriePowodowReklamacji(array $kategoriePowodowReklamacji)
    {
        $this->kategoriePowodowReklamacji = $kategoriePowodowReklamacji;
        return $this;
    }


}

