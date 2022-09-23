<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEZDOListInput
 */
class GetEZDOListInput
{

    /**
     * @var \TomaszKusy\En\GetEZDOList $getEZDOList
     */
    private $getEZDOList = null;

    /**
     * Gets as getEZDOList
     *
     * @return \TomaszKusy\En\GetEZDOList
     */
    public function getGetEZDOList()
    {
        return $this->getEZDOList;
    }

    /**
     * Sets a new getEZDOList
     *
     * @param \TomaszKusy\En\GetEZDOList $getEZDOList
     * @return self
     */
    public function setGetEZDOList(\TomaszKusy\En\GetEZDOList $getEZDOList)
    {
        $this->getEZDOList = $getEZDOList;
        return $this;
    }


}

