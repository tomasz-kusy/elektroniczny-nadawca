<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetFirmowaPocztaBookOutput
 */
class GetFirmowaPocztaBookOutput
{

    /**
     * @var \TomaszKusy\En\GetFirmowaPocztaBookResponse $getFirmowaPocztaBookResponse
     */
    private $getFirmowaPocztaBookResponse = null;

    /**
     * Gets as getFirmowaPocztaBookResponse
     *
     * @return \TomaszKusy\En\GetFirmowaPocztaBookResponse
     */
    public function getGetFirmowaPocztaBookResponse()
    {
        return $this->getFirmowaPocztaBookResponse;
    }

    /**
     * Sets a new getFirmowaPocztaBookResponse
     *
     * @param \TomaszKusy\En\GetFirmowaPocztaBookResponse $getFirmowaPocztaBookResponse
     * @return self
     */
    public function setGetFirmowaPocztaBookResponse(\TomaszKusy\En\GetFirmowaPocztaBookResponse $getFirmowaPocztaBookResponse)
    {
        $this->getFirmowaPocztaBookResponse = $getFirmowaPocztaBookResponse;
        return $this;
    }


}

