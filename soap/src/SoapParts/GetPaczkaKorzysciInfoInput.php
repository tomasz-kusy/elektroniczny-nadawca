<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetPaczkaKorzysciInfoInput
 */
class GetPaczkaKorzysciInfoInput
{

    /**
     * @var \TomaszKusy\En\GetPaczkaKorzysciInfo $getPaczkaKorzysciInfo
     */
    private $getPaczkaKorzysciInfo = null;

    /**
     * Gets as getPaczkaKorzysciInfo
     *
     * @return \TomaszKusy\En\GetPaczkaKorzysciInfo
     */
    public function getGetPaczkaKorzysciInfo()
    {
        return $this->getPaczkaKorzysciInfo;
    }

    /**
     * Sets a new getPaczkaKorzysciInfo
     *
     * @param \TomaszKusy\En\GetPaczkaKorzysciInfo $getPaczkaKorzysciInfo
     * @return self
     */
    public function setGetPaczkaKorzysciInfo(\TomaszKusy\En\GetPaczkaKorzysciInfo $getPaczkaKorzysciInfo)
    {
        $this->getPaczkaKorzysciInfo = $getPaczkaKorzysciInfo;
        return $this;
    }


}

