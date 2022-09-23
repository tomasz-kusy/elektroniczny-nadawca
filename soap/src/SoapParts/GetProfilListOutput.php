<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetProfilListOutput
 */
class GetProfilListOutput
{

    /**
     * @var \TomaszKusy\En\GetProfilListResponse $getProfilListResponse
     */
    private $getProfilListResponse = null;

    /**
     * Gets as getProfilListResponse
     *
     * @return \TomaszKusy\En\GetProfilListResponse
     */
    public function getGetProfilListResponse()
    {
        return $this->getProfilListResponse;
    }

    /**
     * Sets a new getProfilListResponse
     *
     * @param \TomaszKusy\En\GetProfilListResponse $getProfilListResponse
     * @return self
     */
    public function setGetProfilListResponse(\TomaszKusy\En\GetProfilListResponse $getProfilListResponse)
    {
        $this->getProfilListResponse = $getProfilListResponse;
        return $this;
    }


}

