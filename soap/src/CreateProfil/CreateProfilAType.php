<?php

namespace TomaszKusy\En\CreateProfil;

/**
 * Class representing CreateProfilAType
 */
class CreateProfilAType
{

    /**
     * @var \TomaszKusy\En\ProfilType $profil
     */
    private $profil = null;

    /**
     * Gets as profil
     *
     * @return \TomaszKusy\En\ProfilType
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Sets a new profil
     *
     * @param \TomaszKusy\En\ProfilType $profil
     * @return self
     */
    public function setProfil(\TomaszKusy\En\ProfilType $profil)
    {
        $this->profil = $profil;
        return $this;
    }


}

