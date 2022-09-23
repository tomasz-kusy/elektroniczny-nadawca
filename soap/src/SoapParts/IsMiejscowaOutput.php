<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing IsMiejscowaOutput
 */
class IsMiejscowaOutput
{

    /**
     * @var \TomaszKusy\En\IsMiejscowaResponse $isMiejscowaResponse
     */
    private $isMiejscowaResponse = null;

    /**
     * Gets as isMiejscowaResponse
     *
     * @return \TomaszKusy\En\IsMiejscowaResponse
     */
    public function getIsMiejscowaResponse()
    {
        return $this->isMiejscowaResponse;
    }

    /**
     * Sets a new isMiejscowaResponse
     *
     * @param \TomaszKusy\En\IsMiejscowaResponse $isMiejscowaResponse
     * @return self
     */
    public function setIsMiejscowaResponse(\TomaszKusy\En\IsMiejscowaResponse $isMiejscowaResponse)
    {
        $this->isMiejscowaResponse = $isMiejscowaResponse;
        return $this;
    }


}

