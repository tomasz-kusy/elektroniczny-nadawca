<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing SetAktywnaKartaInput
 */
class SetAktywnaKartaInput
{

    /**
     * @var \TomaszKusy\En\SetAktywnaKarta $setAktywnaKarta
     */
    private $setAktywnaKarta = null;

    /**
     * Gets as setAktywnaKarta
     *
     * @return \TomaszKusy\En\SetAktywnaKarta
     */
    public function getSetAktywnaKarta()
    {
        return $this->setAktywnaKarta;
    }

    /**
     * Sets a new setAktywnaKarta
     *
     * @param \TomaszKusy\En\SetAktywnaKarta $setAktywnaKarta
     * @return self
     */
    public function setSetAktywnaKarta(\TomaszKusy\En\SetAktywnaKarta $setAktywnaKarta)
    {
        $this->setAktywnaKarta = $setAktywnaKarta;
        return $this;
    }


}

