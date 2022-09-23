<?php

namespace TomaszKusy\En\UploadIWDContent;

/**
 * Class representing UploadIWDContentAType
 */
class UploadIWDContentAType
{

    /**
     * @var int $urzadNadania
     */
    private $urzadNadania = null;

    /**
     * @var string $iWDContent
     */
    private $iWDContent = null;

    /**
     * Gets as urzadNadania
     *
     * @return int
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Sets a new urzadNadania
     *
     * @param int $urzadNadania
     * @return self
     */
    public function setUrzadNadania($urzadNadania)
    {
        $this->urzadNadania = $urzadNadania;
        return $this;
    }

    /**
     * Gets as iWDContent
     *
     * @return string
     */
    public function getIWDContent()
    {
        return $this->iWDContent;
    }

    /**
     * Sets a new iWDContent
     *
     * @param string $iWDContent
     * @return self
     */
    public function setIWDContent($iWDContent)
    {
        $this->iWDContent = $iWDContent;
        return $this;
    }


}

