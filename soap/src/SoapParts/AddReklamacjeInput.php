<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing AddReklamacjeInput
 */
class AddReklamacjeInput
{

    /**
     * @var \TomaszKusy\En\AddReklamacje $addReklamacje
     */
    private $addReklamacje = null;

    /**
     * Gets as addReklamacje
     *
     * @return \TomaszKusy\En\AddReklamacje
     */
    public function getAddReklamacje()
    {
        return $this->addReklamacje;
    }

    /**
     * Sets a new addReklamacje
     *
     * @param \TomaszKusy\En\AddReklamacje $addReklamacje
     * @return self
     */
    public function setAddReklamacje(\TomaszKusy\En\AddReklamacje $addReklamacje)
    {
        $this->addReklamacje = $addReklamacje;
        return $this;
    }


}

