<?php

namespace TomaszKusy\En;

/**
 * Class representing EZDOPakietType
 *
 *
 * XSD Type: EZDOPakietType
 */
class EZDOPakietType
{

    /**
     * @var int $idEZDOPakiet
     */
    private $idEZDOPakiet = null;

    /**
     * @var \DateTime $exported
     */
    private $exported = null;

    /**
     * @var string $idEZDOFile
     */
    private $idEZDOFile = null;

    /**
     * Gets as idEZDOPakiet
     *
     * @return int
     */
    public function getIdEZDOPakiet()
    {
        return $this->idEZDOPakiet;
    }

    /**
     * Sets a new idEZDOPakiet
     *
     * @param int $idEZDOPakiet
     * @return self
     */
    public function setIdEZDOPakiet($idEZDOPakiet)
    {
        $this->idEZDOPakiet = $idEZDOPakiet;
        return $this;
    }

    /**
     * Gets as exported
     *
     * @return \DateTime
     */
    public function getExported()
    {
        return $this->exported;
    }

    /**
     * Sets a new exported
     *
     * @param \DateTime $exported
     * @return self
     */
    public function setExported(\DateTime $exported)
    {
        $this->exported = $exported;
        return $this;
    }

    /**
     * Gets as idEZDOFile
     *
     * @return string
     */
    public function getIdEZDOFile()
    {
        return $this->idEZDOFile;
    }

    /**
     * Sets a new idEZDOFile
     *
     * @param string $idEZDOFile
     * @return self
     */
    public function setIdEZDOFile($idEZDOFile)
    {
        $this->idEZDOFile = $idEZDOFile;
        return $this;
    }


}

