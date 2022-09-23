<?php

namespace TomaszKusy\En;

/**
 * Class representing KartaType
 *
 *
 * XSD Type: kartaType
 */
class KartaType
{

    /**
     * @var int $idKarta
     */
    private $idKarta = null;

    /**
     * @var string $opis
     */
    private $opis = null;

    /**
     * @var bool $aktywna
     */
    private $aktywna = null;

    /**
     * Typ karty. Dopuszczalne wartości: 1-do
     *  nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych
     *  wartości może być rozszerzona w przyszłości.
     *
     * @var int $typ
     */
    private $typ = null;

    /**
     * Lista dostępnych produktów dla karty
     *
     * @var \TomaszKusy\En\ProduktInKartaType[] $produktyInKarta
     */
    private $produktyInKarta = null;

    /**
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @var \TomaszKusy\En\AdresKorespondencyjnyType[] $adresKorespondencyjny
     */
    private $adresKorespondencyjny = [
        
    ];

    /**
     * Gets as idKarta
     *
     * @return int
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Sets a new idKarta
     *
     * @param int $idKarta
     * @return self
     */
    public function setIdKarta($idKarta)
    {
        $this->idKarta = $idKarta;
        return $this;
    }

    /**
     * Gets as opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Sets a new opis
     *
     * @param string $opis
     * @return self
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;
        return $this;
    }

    /**
     * Gets as aktywna
     *
     * @return bool
     */
    public function getAktywna()
    {
        return $this->aktywna;
    }

    /**
     * Sets a new aktywna
     *
     * @param bool $aktywna
     * @return self
     */
    public function setAktywna($aktywna)
    {
        $this->aktywna = $aktywna;
        return $this;
    }

    /**
     * Gets as typ
     *
     * Typ karty. Dopuszczalne wartości: 1-do
     *  nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych
     *  wartości może być rozszerzona w przyszłości.
     *
     * @return int
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets a new typ
     *
     * Typ karty. Dopuszczalne wartości: 1-do
     *  nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych
     *  wartości może być rozszerzona w przyszłości.
     *
     * @param int $typ
     * @return self
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;
        return $this;
    }

    /**
     * Adds as produktInKarta
     *
     * Lista dostępnych produktów dla karty
     *
     * @return self
     * @param \TomaszKusy\En\ProduktInKartaType $produktInKarta
     */
    public function addToProduktyInKarta(\TomaszKusy\En\ProduktInKartaType $produktInKarta)
    {
        $this->produktyInKarta[] = $produktInKarta;
        return $this;
    }

    /**
     * isset produktyInKarta
     *
     * Lista dostępnych produktów dla karty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduktyInKarta($index)
    {
        return isset($this->produktyInKarta[$index]);
    }

    /**
     * unset produktyInKarta
     *
     * Lista dostępnych produktów dla karty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduktyInKarta($index)
    {
        unset($this->produktyInKarta[$index]);
    }

    /**
     * Gets as produktyInKarta
     *
     * Lista dostępnych produktów dla karty
     *
     * @return \TomaszKusy\En\ProduktInKartaType[]
     */
    public function getProduktyInKarta()
    {
        return $this->produktyInKarta;
    }

    /**
     * Sets a new produktyInKarta
     *
     * Lista dostępnych produktów dla karty
     *
     * @param \TomaszKusy\En\ProduktInKartaType[] $produktyInKarta
     * @return self
     */
    public function setProduktyInKarta(array $produktyInKarta)
    {
        $this->produktyInKarta = $produktyInKarta;
        return $this;
    }

    /**
     * Adds as adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @return self
     * @param \TomaszKusy\En\AdresKorespondencyjnyType $adresKorespondencyjny
     */
    public function addToAdresKorespondencyjny(\TomaszKusy\En\AdresKorespondencyjnyType $adresKorespondencyjny)
    {
        $this->adresKorespondencyjny[] = $adresKorespondencyjny;
        return $this;
    }

    /**
     * isset adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdresKorespondencyjny($index)
    {
        return isset($this->adresKorespondencyjny[$index]);
    }

    /**
     * unset adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdresKorespondencyjny($index)
    {
        unset($this->adresKorespondencyjny[$index]);
    }

    /**
     * Gets as adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @return \TomaszKusy\En\AdresKorespondencyjnyType[]
     */
    public function getAdresKorespondencyjny()
    {
        return $this->adresKorespondencyjny;
    }

    /**
     * Sets a new adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @param \TomaszKusy\En\AdresKorespondencyjnyType[] $adresKorespondencyjny
     * @return self
     */
    public function setAdresKorespondencyjny(array $adresKorespondencyjny)
    {
        $this->adresKorespondencyjny = $adresKorespondencyjny;
        return $this;
    }


}

