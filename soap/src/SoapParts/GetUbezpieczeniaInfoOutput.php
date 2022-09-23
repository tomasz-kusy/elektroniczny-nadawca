<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetUbezpieczeniaInfoOutput
 */
class GetUbezpieczeniaInfoOutput
{

    /**
     * @var \TomaszKusy\En\GetUbezpieczeniaInfoResponse $getUbezpieczeniaInfoResponse
     */
    private $getUbezpieczeniaInfoResponse = null;

    /**
     * Gets as getUbezpieczeniaInfoResponse
     *
     * @return \TomaszKusy\En\GetUbezpieczeniaInfoResponse
     */
    public function getGetUbezpieczeniaInfoResponse()
    {
        return $this->getUbezpieczeniaInfoResponse;
    }

    /**
     * Sets a new getUbezpieczeniaInfoResponse
     *
     * @param \TomaszKusy\En\GetUbezpieczeniaInfoResponse $getUbezpieczeniaInfoResponse
     * @return self
     */
    public function setGetUbezpieczeniaInfoResponse(\TomaszKusy\En\GetUbezpieczeniaInfoResponse $getUbezpieczeniaInfoResponse)
    {
        $this->getUbezpieczeniaInfoResponse = $getUbezpieczeniaInfoResponse;
        return $this;
    }


}

