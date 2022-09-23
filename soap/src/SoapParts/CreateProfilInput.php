<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing CreateProfilInput
 */
class CreateProfilInput
{

    /**
     * @var \TomaszKusy\En\CreateProfil $createProfil
     */
    private $createProfil = null;

    /**
     * Gets as createProfil
     *
     * @return \TomaszKusy\En\CreateProfil
     */
    public function getCreateProfil()
    {
        return $this->createProfil;
    }

    /**
     * Sets a new createProfil
     *
     * @param \TomaszKusy\En\CreateProfil $createProfil
     * @return self
     */
    public function setCreateProfil(\TomaszKusy\En\CreateProfil $createProfil)
    {
        $this->createProfil = $createProfil;
        return $this;
    }


}

