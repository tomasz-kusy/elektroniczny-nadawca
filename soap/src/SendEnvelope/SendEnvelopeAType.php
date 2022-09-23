<?php

namespace TomaszKusy\En\SendEnvelope;

/**
 * Class representing SendEnvelopeAType
 */
class SendEnvelopeAType
{

    /**
     * @var int $urzadNadania
     */
    private $urzadNadania = null;

    /**
     * @var \TomaszKusy\En\PakietType[] $pakiet
     */
    private $pakiet = [
        
    ];

    /**
     * @var int $idBufor
     */
    private $idBufor = null;

    /**
     * @var \TomaszKusy\En\ProfilType $profil
     */
    private $profil = null;

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
     * Adds as pakiet
     *
     * @return self
     * @param \TomaszKusy\En\PakietType $pakiet
     */
    public function addToPakiet(\TomaszKusy\En\PakietType $pakiet)
    {
        $this->pakiet[] = $pakiet;
        return $this;
    }

    /**
     * isset pakiet
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPakiet($index)
    {
        return isset($this->pakiet[$index]);
    }

    /**
     * unset pakiet
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPakiet($index)
    {
        unset($this->pakiet[$index]);
    }

    /**
     * Gets as pakiet
     *
     * @return \TomaszKusy\En\PakietType[]
     */
    public function getPakiet()
    {
        return $this->pakiet;
    }

    /**
     * Sets a new pakiet
     *
     * @param \TomaszKusy\En\PakietType[] $pakiet
     * @return self
     */
    public function setPakiet(array $pakiet)
    {
        $this->pakiet = $pakiet;
        return $this;
    }

    /**
     * Gets as idBufor
     *
     * @return int
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Sets a new idBufor
     *
     * @param int $idBufor
     * @return self
     */
    public function setIdBufor($idBufor)
    {
        $this->idBufor = $idBufor;
        return $this;
    }

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

