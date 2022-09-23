<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetPaczkaKorzysciInfoOutput
 */
class GetPaczkaKorzysciInfoOutput
{

    /**
     * @var \TomaszKusy\En\GetPaczkaKorzysciInfoResponse $getPaczkaKorzysciInfoResponse
     */
    private $getPaczkaKorzysciInfoResponse = null;

    /**
     * Gets as getPaczkaKorzysciInfoResponse
     *
     * @return \TomaszKusy\En\GetPaczkaKorzysciInfoResponse
     */
    public function getGetPaczkaKorzysciInfoResponse()
    {
        return $this->getPaczkaKorzysciInfoResponse;
    }

    /**
     * Sets a new getPaczkaKorzysciInfoResponse
     *
     * @param \TomaszKusy\En\GetPaczkaKorzysciInfoResponse $getPaczkaKorzysciInfoResponse
     * @return self
     */
    public function setGetPaczkaKorzysciInfoResponse(\TomaszKusy\En\GetPaczkaKorzysciInfoResponse $getPaczkaKorzysciInfoResponse)
    {
        $this->getPaczkaKorzysciInfoResponse = $getPaczkaKorzysciInfoResponse;
        return $this;
    }


}

