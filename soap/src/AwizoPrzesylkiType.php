<?php

namespace TomaszKusy\En;

/**
 * Class representing AwizoPrzesylkiType
 *
 *
 * XSD Type: awizoPrzesylkiType
 */
class AwizoPrzesylkiType
{

    /**
     * @var \DateTime $dataPierwszegoAwizowania
     */
    private $dataPierwszegoAwizowania = null;

    /**
     * @var \DateTime $dataDrugiegoAwizowania
     */
    private $dataDrugiegoAwizowania = null;

    /**
     * @var string $miejscePozostawienia
     */
    private $miejscePozostawienia = null;

    /**
     * @var int $idPlacowkaPocztowaWydajaca
     */
    private $idPlacowkaPocztowaWydajaca = null;

    /**
     * Gets as dataPierwszegoAwizowania
     *
     * @return \DateTime
     */
    public function getDataPierwszegoAwizowania()
    {
        return $this->dataPierwszegoAwizowania;
    }

    /**
     * Sets a new dataPierwszegoAwizowania
     *
     * @param \DateTime $dataPierwszegoAwizowania
     * @return self
     */
    public function setDataPierwszegoAwizowania(\DateTime $dataPierwszegoAwizowania)
    {
        $this->dataPierwszegoAwizowania = $dataPierwszegoAwizowania;
        return $this;
    }

    /**
     * Gets as dataDrugiegoAwizowania
     *
     * @return \DateTime
     */
    public function getDataDrugiegoAwizowania()
    {
        return $this->dataDrugiegoAwizowania;
    }

    /**
     * Sets a new dataDrugiegoAwizowania
     *
     * @param \DateTime $dataDrugiegoAwizowania
     * @return self
     */
    public function setDataDrugiegoAwizowania(\DateTime $dataDrugiegoAwizowania)
    {
        $this->dataDrugiegoAwizowania = $dataDrugiegoAwizowania;
        return $this;
    }

    /**
     * Gets as miejscePozostawienia
     *
     * @return string
     */
    public function getMiejscePozostawienia()
    {
        return $this->miejscePozostawienia;
    }

    /**
     * Sets a new miejscePozostawienia
     *
     * @param string $miejscePozostawienia
     * @return self
     */
    public function setMiejscePozostawienia($miejscePozostawienia)
    {
        $this->miejscePozostawienia = $miejscePozostawienia;
        return $this;
    }

    /**
     * Gets as idPlacowkaPocztowaWydajaca
     *
     * @return int
     */
    public function getIdPlacowkaPocztowaWydajaca()
    {
        return $this->idPlacowkaPocztowaWydajaca;
    }

    /**
     * Sets a new idPlacowkaPocztowaWydajaca
     *
     * @param int $idPlacowkaPocztowaWydajaca
     * @return self
     */
    public function setIdPlacowkaPocztowaWydajaca($idPlacowkaPocztowaWydajaca)
    {
        $this->idPlacowkaPocztowaWydajaca = $idPlacowkaPocztowaWydajaca;
        return $this;
    }


}

