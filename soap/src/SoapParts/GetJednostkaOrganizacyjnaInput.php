<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetJednostkaOrganizacyjnaInput
 */
class GetJednostkaOrganizacyjnaInput
{

    /**
     * @var \TomaszKusy\En\GetJednostkaOrganizacyjna $getJednostkaOrganizacyjna
     */
    private $getJednostkaOrganizacyjna = null;

    /**
     * Gets as getJednostkaOrganizacyjna
     *
     * @return \TomaszKusy\En\GetJednostkaOrganizacyjna
     */
    public function getGetJednostkaOrganizacyjna()
    {
        return $this->getJednostkaOrganizacyjna;
    }

    /**
     * Sets a new getJednostkaOrganizacyjna
     *
     * @param \TomaszKusy\En\GetJednostkaOrganizacyjna $getJednostkaOrganizacyjna
     * @return self
     */
    public function setGetJednostkaOrganizacyjna(\TomaszKusy\En\GetJednostkaOrganizacyjna $getJednostkaOrganizacyjna)
    {
        $this->getJednostkaOrganizacyjna = $getJednostkaOrganizacyjna;
        return $this;
    }


}

