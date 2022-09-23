<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetReklamacjeInput
 */
class GetReklamacjeInput
{

    /**
     * @var \TomaszKusy\En\GetReklamacje $getReklamacje
     */
    private $getReklamacje = null;

    /**
     * Gets as getReklamacje
     *
     * @return \TomaszKusy\En\GetReklamacje
     */
    public function getGetReklamacje()
    {
        return $this->getReklamacje;
    }

    /**
     * Sets a new getReklamacje
     *
     * @param \TomaszKusy\En\GetReklamacje $getReklamacje
     * @return self
     */
    public function setGetReklamacje(\TomaszKusy\En\GetReklamacje $getReklamacje)
    {
        $this->getReklamacje = $getReklamacje;
        return $this;
    }


}

