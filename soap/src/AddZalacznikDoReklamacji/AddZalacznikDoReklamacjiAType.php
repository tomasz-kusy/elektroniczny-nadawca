<?php

namespace TomaszKusy\En\AddZalacznikDoReklamacji;

/**
 * Class representing AddZalacznikDoReklamacjiAType
 */
class AddZalacznikDoReklamacjiAType
{

    /**
     * @var string $idReklamacja
     */
    private $idReklamacja = null;

    /**
     * @var \TomaszKusy\En\ZalacznikDoReklamacjiType[] $zalacznik
     */
    private $zalacznik = [
        
    ];

    /**
     * Gets as idReklamacja
     *
     * @return string
     */
    public function getIdReklamacja()
    {
        return $this->idReklamacja;
    }

    /**
     * Sets a new idReklamacja
     *
     * @param string $idReklamacja
     * @return self
     */
    public function setIdReklamacja($idReklamacja)
    {
        $this->idReklamacja = $idReklamacja;
        return $this;
    }

    /**
     * Adds as zalacznik
     *
     * @return self
     * @param \TomaszKusy\En\ZalacznikDoReklamacjiType $zalacznik
     */
    public function addToZalacznik(\TomaszKusy\En\ZalacznikDoReklamacjiType $zalacznik)
    {
        $this->zalacznik[] = $zalacznik;
        return $this;
    }

    /**
     * isset zalacznik
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZalacznik($index)
    {
        return isset($this->zalacznik[$index]);
    }

    /**
     * unset zalacznik
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZalacznik($index)
    {
        unset($this->zalacznik[$index]);
    }

    /**
     * Gets as zalacznik
     *
     * @return \TomaszKusy\En\ZalacznikDoReklamacjiType[]
     */
    public function getZalacznik()
    {
        return $this->zalacznik;
    }

    /**
     * Sets a new zalacznik
     *
     * @param \TomaszKusy\En\ZalacznikDoReklamacjiType[] $zalacznik
     * @return self
     */
    public function setZalacznik(array $zalacznik)
    {
        $this->zalacznik = $zalacznik;
        return $this;
    }


}

