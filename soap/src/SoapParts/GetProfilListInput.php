<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetProfilListInput
 */
class GetProfilListInput
{

    /**
     * @var \TomaszKusy\En\GetProfilList $getProfilList
     */
    private $getProfilList = null;

    /**
     * Gets as getProfilList
     *
     * @return \TomaszKusy\En\GetProfilList
     */
    public function getGetProfilList()
    {
        return $this->getProfilList;
    }

    /**
     * Sets a new getProfilList
     *
     * @param \TomaszKusy\En\GetProfilList $getProfilList
     * @return self
     */
    public function setGetProfilList(\TomaszKusy\En\GetProfilList $getProfilList)
    {
        $this->getProfilList = $getProfilList;
        return $this;
    }


}

