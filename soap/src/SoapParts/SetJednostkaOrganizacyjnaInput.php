<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing SetJednostkaOrganizacyjnaInput
 */
class SetJednostkaOrganizacyjnaInput
{

    /**
     * @var \TomaszKusy\En\SetJednostkaOrganizacyjna $setJednostkaOrganizacyjna
     */
    private $setJednostkaOrganizacyjna = null;

    /**
     * Gets as setJednostkaOrganizacyjna
     *
     * @return \TomaszKusy\En\SetJednostkaOrganizacyjna
     */
    public function getSetJednostkaOrganizacyjna()
    {
        return $this->setJednostkaOrganizacyjna;
    }

    /**
     * Sets a new setJednostkaOrganizacyjna
     *
     * @param \TomaszKusy\En\SetJednostkaOrganizacyjna $setJednostkaOrganizacyjna
     * @return self
     */
    public function setSetJednostkaOrganizacyjna(\TomaszKusy\En\SetJednostkaOrganizacyjna $setJednostkaOrganizacyjna)
    {
        $this->setJednostkaOrganizacyjna = $setJednostkaOrganizacyjna;
        return $this;
    }


}

