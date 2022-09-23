<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing SetJednostkaOrganizacyjnaOutput
 */
class SetJednostkaOrganizacyjnaOutput
{

    /**
     * @var \TomaszKusy\En\SetJednostkaOrganizacyjnaResponse $setJednostkaOrganizacyjnaResponse
     */
    private $setJednostkaOrganizacyjnaResponse = null;

    /**
     * Gets as setJednostkaOrganizacyjnaResponse
     *
     * @return \TomaszKusy\En\SetJednostkaOrganizacyjnaResponse
     */
    public function getSetJednostkaOrganizacyjnaResponse()
    {
        return $this->setJednostkaOrganizacyjnaResponse;
    }

    /**
     * Sets a new setJednostkaOrganizacyjnaResponse
     *
     * @param \TomaszKusy\En\SetJednostkaOrganizacyjnaResponse $setJednostkaOrganizacyjnaResponse
     * @return self
     */
    public function setSetJednostkaOrganizacyjnaResponse(\TomaszKusy\En\SetJednostkaOrganizacyjnaResponse $setJednostkaOrganizacyjnaResponse)
    {
        $this->setJednostkaOrganizacyjnaResponse = $setJednostkaOrganizacyjnaResponse;
        return $this;
    }


}

