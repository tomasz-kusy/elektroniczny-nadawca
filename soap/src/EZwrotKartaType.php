<?php

namespace TomaszKusy\En;

/**
 * Class representing EZwrotKartaType
 *
 *
 * XSD Type: eZwrotKartaType
 */
class EZwrotKartaType
{

    /**
     * @var int $idKarta
     */
    private $idKarta = null;

    /**
     * @var int $idAdresKorespondencyjny
     */
    private $idAdresKorespondencyjny = null;

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
     * Gets as idAdresKorespondencyjny
     *
     * @return int
     */
    public function getIdAdresKorespondencyjny()
    {
        return $this->idAdresKorespondencyjny;
    }

    /**
     * Sets a new idAdresKorespondencyjny
     *
     * @param int $idAdresKorespondencyjny
     * @return self
     */
    public function setIdAdresKorespondencyjny($idAdresKorespondencyjny)
    {
        $this->idAdresKorespondencyjny = $idAdresKorespondencyjny;
        return $this;
    }


}

