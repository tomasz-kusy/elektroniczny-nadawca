<?php

namespace TomaszKusy\En;

/**
 * Class representing TrasaResponseType
 *
 *
 * XSD Type: trasaResponseType
 */
class TrasaResponseType
{

    /**
     * @var bool $isMiejscowa
     */
    private $isMiejscowa = null;

    /**
     * @var string $guid
     */
    private $guid = null;

    /**
     * Gets as isMiejscowa
     *
     * @return bool
     */
    public function getIsMiejscowa()
    {
        return $this->isMiejscowa;
    }

    /**
     * Sets a new isMiejscowa
     *
     * @param bool $isMiejscowa
     * @return self
     */
    public function setIsMiejscowa($isMiejscowa)
    {
        $this->isMiejscowa = $isMiejscowa;
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

