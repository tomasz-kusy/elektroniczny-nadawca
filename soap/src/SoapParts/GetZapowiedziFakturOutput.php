<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetZapowiedziFakturOutput
 */
class GetZapowiedziFakturOutput
{

    /**
     * @var \TomaszKusy\En\GetZapowiedziFakturResponse $getZapowiedziFakturResponse
     */
    private $getZapowiedziFakturResponse = null;

    /**
     * Gets as getZapowiedziFakturResponse
     *
     * @return \TomaszKusy\En\GetZapowiedziFakturResponse
     */
    public function getGetZapowiedziFakturResponse()
    {
        return $this->getZapowiedziFakturResponse;
    }

    /**
     * Sets a new getZapowiedziFakturResponse
     *
     * @param \TomaszKusy\En\GetZapowiedziFakturResponse $getZapowiedziFakturResponse
     * @return self
     */
    public function setGetZapowiedziFakturResponse(\TomaszKusy\En\GetZapowiedziFakturResponse $getZapowiedziFakturResponse)
    {
        $this->getZapowiedziFakturResponse = $getZapowiedziFakturResponse;
        return $this;
    }


}

