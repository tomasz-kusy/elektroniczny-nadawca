<?php

namespace TomaszKusy\En;

/**
 * Class representing SposobDoreczeniaType
 *
 *
 * XSD Type: sposobDoreczeniaType
 */
class SposobDoreczeniaType
{

    /**
     * kod sposobu doręczenia (jeden z HOM, PCS, PCF,
     *  SHP)
     *
     * @var string $kod
     */
    private $kod = null;

    /**
     * Wartość alfanumeryczna o maksymalnej długości
     *  35
     *  znaków, nie wymagany dla kod=HOM
     *
     * @var string $identyfikatorPunktuOdbioru
     */
    private $identyfikatorPunktuOdbioru = null;

    /**
     * Gets as kod
     *
     * kod sposobu doręczenia (jeden z HOM, PCS, PCF,
     *  SHP)
     *
     * @return string
     */
    public function getKod()
    {
        return $this->kod;
    }

    /**
     * Sets a new kod
     *
     * kod sposobu doręczenia (jeden z HOM, PCS, PCF,
     *  SHP)
     *
     * @param string $kod
     * @return self
     */
    public function setKod($kod)
    {
        $this->kod = $kod;
        return $this;
    }

    /**
     * Gets as identyfikatorPunktuOdbioru
     *
     * Wartość alfanumeryczna o maksymalnej długości
     *  35
     *  znaków, nie wymagany dla kod=HOM
     *
     * @return string
     */
    public function getIdentyfikatorPunktuOdbioru()
    {
        return $this->identyfikatorPunktuOdbioru;
    }

    /**
     * Sets a new identyfikatorPunktuOdbioru
     *
     * Wartość alfanumeryczna o maksymalnej długości
     *  35
     *  znaków, nie wymagany dla kod=HOM
     *
     * @param string $identyfikatorPunktuOdbioru
     * @return self
     */
    public function setIdentyfikatorPunktuOdbioru($identyfikatorPunktuOdbioru)
    {
        $this->identyfikatorPunktuOdbioru = $identyfikatorPunktuOdbioru;
        return $this;
    }


}

