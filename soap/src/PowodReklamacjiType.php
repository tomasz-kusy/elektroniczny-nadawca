<?php

namespace TomaszKusy\En;

/**
 * Class representing PowodReklamacjiType
 *
 *
 * XSD Type: powodReklamacjiType
 */
class PowodReklamacjiType
{

    /**
     * @var int $idPowodGlowny
     */
    private $idPowodGlowny = null;

    /**
     * @var string $powodGlownyOpis
     */
    private $powodGlownyOpis = null;

    /**
     * @var \TomaszKusy\En\PowodSzczegolowyType[] $powodSzczegolowy
     */
    private $powodSzczegolowy = [
        
    ];

    /**
     * Gets as idPowodGlowny
     *
     * @return int
     */
    public function getIdPowodGlowny()
    {
        return $this->idPowodGlowny;
    }

    /**
     * Sets a new idPowodGlowny
     *
     * @param int $idPowodGlowny
     * @return self
     */
    public function setIdPowodGlowny($idPowodGlowny)
    {
        $this->idPowodGlowny = $idPowodGlowny;
        return $this;
    }

    /**
     * Gets as powodGlownyOpis
     *
     * @return string
     */
    public function getPowodGlownyOpis()
    {
        return $this->powodGlownyOpis;
    }

    /**
     * Sets a new powodGlownyOpis
     *
     * @param string $powodGlownyOpis
     * @return self
     */
    public function setPowodGlownyOpis($powodGlownyOpis)
    {
        $this->powodGlownyOpis = $powodGlownyOpis;
        return $this;
    }

    /**
     * Adds as powodSzczegolowy
     *
     * @return self
     * @param \TomaszKusy\En\PowodSzczegolowyType $powodSzczegolowy
     */
    public function addToPowodSzczegolowy(\TomaszKusy\En\PowodSzczegolowyType $powodSzczegolowy)
    {
        $this->powodSzczegolowy[] = $powodSzczegolowy;
        return $this;
    }

    /**
     * isset powodSzczegolowy
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPowodSzczegolowy($index)
    {
        return isset($this->powodSzczegolowy[$index]);
    }

    /**
     * unset powodSzczegolowy
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPowodSzczegolowy($index)
    {
        unset($this->powodSzczegolowy[$index]);
    }

    /**
     * Gets as powodSzczegolowy
     *
     * @return \TomaszKusy\En\PowodSzczegolowyType[]
     */
    public function getPowodSzczegolowy()
    {
        return $this->powodSzczegolowy;
    }

    /**
     * Sets a new powodSzczegolowy
     *
     * @param \TomaszKusy\En\PowodSzczegolowyType[] $powodSzczegolowy
     * @return self
     */
    public function setPowodSzczegolowy(array $powodSzczegolowy)
    {
        $this->powodSzczegolowy = $powodSzczegolowy;
        return $this;
    }


}

