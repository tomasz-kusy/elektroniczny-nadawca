<?php

namespace TomaszKusy\En;

/**
 * Class representing PrzesylkaEZwrotPocztexType
 *
 *
 * XSD Type: przesylkaEZwrotPocztexType
 */
class PrzesylkaEZwrotPocztexType extends PrzesylkaRejestrowanaType
{

    /**
     * @var string $numerNadaniaZwrot
     */
    private $numerNadaniaZwrot = null;

    /**
     * @var int $idSklepEZwrot
     */
    private $idSklepEZwrot = null;

    /**
     * Gets as numerNadaniaZwrot
     *
     * @return string
     */
    public function getNumerNadaniaZwrot()
    {
        return $this->numerNadaniaZwrot;
    }

    /**
     * Sets a new numerNadaniaZwrot
     *
     * @param string $numerNadaniaZwrot
     * @return self
     */
    public function setNumerNadaniaZwrot($numerNadaniaZwrot)
    {
        $this->numerNadaniaZwrot = $numerNadaniaZwrot;
        return $this;
    }

    /**
     * Gets as idSklepEZwrot
     *
     * @return int
     */
    public function getIdSklepEZwrot()
    {
        return $this->idSklepEZwrot;
    }

    /**
     * Sets a new idSklepEZwrot
     *
     * @param int $idSklepEZwrot
     * @return self
     */
    public function setIdSklepEZwrot($idSklepEZwrot)
    {
        $this->idSklepEZwrot = $idSklepEZwrot;
        return $this;
    }


}

