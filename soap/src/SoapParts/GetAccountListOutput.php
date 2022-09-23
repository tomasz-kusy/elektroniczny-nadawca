<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetAccountListOutput
 */
class GetAccountListOutput
{

    /**
     * @var \TomaszKusy\En\GetAccountListResponse $getAccountListResponse
     */
    private $getAccountListResponse = null;

    /**
     * Gets as getAccountListResponse
     *
     * @return \TomaszKusy\En\GetAccountListResponse
     */
    public function getGetAccountListResponse()
    {
        return $this->getAccountListResponse;
    }

    /**
     * Sets a new getAccountListResponse
     *
     * @param \TomaszKusy\En\GetAccountListResponse $getAccountListResponse
     * @return self
     */
    public function setGetAccountListResponse(\TomaszKusy\En\GetAccountListResponse $getAccountListResponse)
    {
        $this->getAccountListResponse = $getAccountListResponse;
        return $this;
    }


}

