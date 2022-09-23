<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing UpdateProfilInput
 */
class UpdateProfilInput
{

    /**
     * @var \TomaszKusy\En\UpdateProfil $updateProfil
     */
    private $updateProfil = null;

    /**
     * Gets as updateProfil
     *
     * @return \TomaszKusy\En\UpdateProfil
     */
    public function getUpdateProfil()
    {
        return $this->updateProfil;
    }

    /**
     * Sets a new updateProfil
     *
     * @param \TomaszKusy\En\UpdateProfil $updateProfil
     * @return self
     */
    public function setUpdateProfil(\TomaszKusy\En\UpdateProfil $updateProfil)
    {
        $this->updateProfil = $updateProfil;
        return $this;
    }


}

