<?php

namespace TomaszKusy\En;

/**
 * Class representing ProfilType
 *
 *
 * XSD Type: profilType
 */
class ProfilType extends AdresType
{

    /**
     * @var int $idProfil
     */
    private $idProfil = null;

    /**
     * @var string $nazwaSkrocona
     */
    private $nazwaSkrocona = null;

    /**
     * @var string $fax
     */
    private $fax = null;

    /**
     * Gets as idProfil
     *
     * @return int
     */
    public function getIdProfil()
    {
        return $this->idProfil;
    }

    /**
     * Sets a new idProfil
     *
     * @param int $idProfil
     * @return self
     */
    public function setIdProfil($idProfil)
    {
        $this->idProfil = $idProfil;
        return $this;
    }

    /**
     * Gets as nazwaSkrocona
     *
     * @return string
     */
    public function getNazwaSkrocona()
    {
        return $this->nazwaSkrocona;
    }

    /**
     * Sets a new nazwaSkrocona
     *
     * @param string $nazwaSkrocona
     * @return self
     */
    public function setNazwaSkrocona($nazwaSkrocona)
    {
        $this->nazwaSkrocona = $nazwaSkrocona;
        return $this;
    }

    /**
     * Gets as fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }


}

