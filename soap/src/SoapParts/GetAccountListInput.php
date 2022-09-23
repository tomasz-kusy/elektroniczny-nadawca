<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetAccountListInput
 */
class GetAccountListInput
{

    /**
     * @var \TomaszKusy\En\GetAccountList $getAccountList
     */
    private $getAccountList = null;

    /**
     * Gets as getAccountList
     *
     * @return \TomaszKusy\En\GetAccountList
     */
    public function getGetAccountList()
    {
        return $this->getAccountList;
    }

    /**
     * Sets a new getAccountList
     *
     * @param \TomaszKusy\En\GetAccountList $getAccountList
     * @return self
     */
    public function setGetAccountList(\TomaszKusy\En\GetAccountList $getAccountList)
    {
        $this->getAccountList = $getAccountList;
        return $this;
    }


}

