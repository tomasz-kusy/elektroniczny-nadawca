<?php

namespace TomaszKusy\En;

/**
 * Class representing PrintResultType
 *
 *
 * XSD Type: PrintResultType
 */
class PrintResultType
{

    /**
     * @var string $guid
     */
    private $guid = null;

    /**
     * @var string $print
     */
    private $print = null;

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

    /**
     * Gets as print
     *
     * @return string
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * Sets a new print
     *
     * @param string $print
     * @return self
     */
    public function setPrint($print)
    {
        $this->print = $print;
        return $this;
    }


}

