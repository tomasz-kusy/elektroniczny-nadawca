<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEZDOInput
 */
class GetEZDOInput
{

    /**
     * @var \TomaszKusy\En\GetEZDO $getEZDO
     */
    private $getEZDO = null;

    /**
     * Gets as getEZDO
     *
     * @return \TomaszKusy\En\GetEZDO
     */
    public function getGetEZDO()
    {
        return $this->getEZDO;
    }

    /**
     * Sets a new getEZDO
     *
     * @param \TomaszKusy\En\GetEZDO $getEZDO
     * @return self
     */
    public function setGetEZDO(\TomaszKusy\En\GetEZDO $getEZDO)
    {
        $this->getEZDO = $getEZDO;
        return $this;
    }


}

