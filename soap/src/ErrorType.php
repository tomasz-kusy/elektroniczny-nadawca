<?php

namespace TomaszKusy\En;

/**
 * Class representing ErrorType
 *
 *
 * XSD Type: errorType
 */
class ErrorType
{

    /**
     * @var int $errorNumber
     */
    private $errorNumber = null;

    /**
     * @var string $errorDesc
     */
    private $errorDesc = null;

    /**
     * @var string $guid
     */
    private $guid = null;

    /**
     * Gets as errorNumber
     *
     * @return int
     */
    public function getErrorNumber()
    {
        return $this->errorNumber;
    }

    /**
     * Sets a new errorNumber
     *
     * @param int $errorNumber
     * @return self
     */
    public function setErrorNumber($errorNumber)
    {
        $this->errorNumber = $errorNumber;
        return $this;
    }

    /**
     * Gets as errorDesc
     *
     * @return string
     */
    public function getErrorDesc()
    {
        return $this->errorDesc;
    }

    /**
     * Sets a new errorDesc
     *
     * @param string $errorDesc
     * @return self
     */
    public function setErrorDesc($errorDesc)
    {
        $this->errorDesc = $errorDesc;
        return $this;
    }

    /**
     * Gets as guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * @param string $guid
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }


}

