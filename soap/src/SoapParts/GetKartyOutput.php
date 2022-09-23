<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetKartyOutput
 */
class GetKartyOutput
{

    /**
     * @var \TomaszKusy\En\GetKartyResponse $getKartyResponse
     */
    private $getKartyResponse = null;

    /**
     * Gets as getKartyResponse
     *
     * @return \TomaszKusy\En\GetKartyResponse
     */
    public function getGetKartyResponse()
    {
        return $this->getKartyResponse;
    }

    /**
     * Sets a new getKartyResponse
     *
     * @param \TomaszKusy\En\GetKartyResponse $getKartyResponse
     * @return self
     */
    public function setGetKartyResponse(\TomaszKusy\En\GetKartyResponse $getKartyResponse)
    {
        $this->getKartyResponse = $getKartyResponse;
        return $this;
    }


}

