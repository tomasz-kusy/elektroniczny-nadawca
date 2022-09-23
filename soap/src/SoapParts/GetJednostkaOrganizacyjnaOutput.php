<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetJednostkaOrganizacyjnaOutput
 */
class GetJednostkaOrganizacyjnaOutput
{

    /**
     * @var \TomaszKusy\En\GetJednostkaOrganizacyjnaResponse $getJednostkaOrganizacyjnaResponse
     */
    private $getJednostkaOrganizacyjnaResponse = null;

    /**
     * Gets as getJednostkaOrganizacyjnaResponse
     *
     * @return \TomaszKusy\En\GetJednostkaOrganizacyjnaResponse
     */
    public function getGetJednostkaOrganizacyjnaResponse()
    {
        return $this->getJednostkaOrganizacyjnaResponse;
    }

    /**
     * Sets a new getJednostkaOrganizacyjnaResponse
     *
     * @param \TomaszKusy\En\GetJednostkaOrganizacyjnaResponse $getJednostkaOrganizacyjnaResponse
     * @return self
     */
    public function setGetJednostkaOrganizacyjnaResponse(\TomaszKusy\En\GetJednostkaOrganizacyjnaResponse $getJednostkaOrganizacyjnaResponse)
    {
        $this->getJednostkaOrganizacyjnaResponse = $getJednostkaOrganizacyjnaResponse;
        return $this;
    }


}

