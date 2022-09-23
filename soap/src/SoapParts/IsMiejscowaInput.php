<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing IsMiejscowaInput
 */
class IsMiejscowaInput
{

    /**
     * @var \TomaszKusy\En\IsMiejscowa $isMiejscowa
     */
    private $isMiejscowa = null;

    /**
     * Gets as isMiejscowa
     *
     * @return \TomaszKusy\En\IsMiejscowa
     */
    public function getIsMiejscowa()
    {
        return $this->isMiejscowa;
    }

    /**
     * Sets a new isMiejscowa
     *
     * @param \TomaszKusy\En\IsMiejscowa $isMiejscowa
     * @return self
     */
    public function setIsMiejscowa(\TomaszKusy\En\IsMiejscowa $isMiejscowa)
    {
        $this->isMiejscowa = $isMiejscowa;
        return $this;
    }


}

