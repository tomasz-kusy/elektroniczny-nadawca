<?php

namespace TomaszKusy\En;

/**
 * Class representing ZwrotDokumentowBiznesowaType
 *
 *
 * XSD Type: zwrotDokumentowBiznesowaType
 */
class ZwrotDokumentowBiznesowaType
{

    /**
     * @var string $rodzaj
     */
    private $rodzaj = null;

    /**
     * @var int $idDokumentyZwrotneAdresy
     */
    private $idDokumentyZwrotneAdresy = null;

    /**
     * Gets as rodzaj
     *
     * @return string
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * Sets a new rodzaj
     *
     * @param string $rodzaj
     * @return self
     */
    public function setRodzaj($rodzaj)
    {
        $this->rodzaj = $rodzaj;
        return $this;
    }

    /**
     * Gets as idDokumentyZwrotneAdresy
     *
     * @return int
     */
    public function getIdDokumentyZwrotneAdresy()
    {
        return $this->idDokumentyZwrotneAdresy;
    }

    /**
     * Sets a new idDokumentyZwrotneAdresy
     *
     * @param int $idDokumentyZwrotneAdresy
     * @return self
     */
    public function setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy)
    {
        $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;
        return $this;
    }


}

