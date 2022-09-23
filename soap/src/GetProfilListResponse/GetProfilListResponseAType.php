<?php

namespace TomaszKusy\En\GetProfilListResponse;

/**
 * Class representing GetProfilListResponseAType
 */
class GetProfilListResponseAType
{

    /**
     * @var \TomaszKusy\En\ProfilType[] $profil
     */
    private $profil = [
        
    ];

    /**
     * Adds as profil
     *
     * @return self
     * @param \TomaszKusy\En\ProfilType $profil
     */
    public function addToProfil(\TomaszKusy\En\ProfilType $profil)
    {
        $this->profil[] = $profil;
        return $this;
    }

    /**
     * isset profil
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfil($index)
    {
        return isset($this->profil[$index]);
    }

    /**
     * unset profil
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfil($index)
    {
        unset($this->profil[$index]);
    }

    /**
     * Gets as profil
     *
     * @return \TomaszKusy\En\ProfilType[]
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Sets a new profil
     *
     * @param \TomaszKusy\En\ProfilType[] $profil
     * @return self
     */
    public function setProfil(array $profil)
    {
        $this->profil = $profil;
        return $this;
    }


}

