<?php

namespace TomaszKusy\En;

/**
 * Class representing OplacaOdbiorcaKartaType
 *
 *
 * XSD Type: oplacaOdbiorcaKartaType
 */
class OplacaOdbiorcaKartaType
{

    /**
     * Identyfikator karty odbiorcy opłacającego
     *  przesyłkę.
     *
     * @var int $idKarta
     */
    private $idKarta = null;

    /**
     * Identyfikator jednego z adresów
     *  korespondencyjnych zdefiniowanych dla karty. Wymagalny dla
     *  typ=ADRESAT_UMOWNY.
     *
     * @var int $idAdresKorespondencyjny
     */
    private $idAdresKorespondencyjny = null;

    /**
     * Gets as idKarta
     *
     * Identyfikator karty odbiorcy opłacającego
     *  przesyłkę.
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
     * Identyfikator karty odbiorcy opłacającego
     *  przesyłkę.
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
     * Identyfikator jednego z adresów
     *  korespondencyjnych zdefiniowanych dla karty. Wymagalny dla
     *  typ=ADRESAT_UMOWNY.
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
     * Identyfikator jednego z adresów
     *  korespondencyjnych zdefiniowanych dla karty. Wymagalny dla
     *  typ=ADRESAT_UMOWNY.
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

