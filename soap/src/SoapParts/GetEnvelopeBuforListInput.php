<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeBuforListInput
 */
class GetEnvelopeBuforListInput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeBuforList $getEnvelopeBuforList
     */
    private $getEnvelopeBuforList = null;

    /**
     * Gets as getEnvelopeBuforList
     *
     * @return \TomaszKusy\En\GetEnvelopeBuforList
     */
    public function getGetEnvelopeBuforList()
    {
        return $this->getEnvelopeBuforList;
    }

    /**
     * Sets a new getEnvelopeBuforList
     *
     * @param \TomaszKusy\En\GetEnvelopeBuforList $getEnvelopeBuforList
     * @return self
     */
    public function setGetEnvelopeBuforList(\TomaszKusy\En\GetEnvelopeBuforList $getEnvelopeBuforList)
    {
        $this->getEnvelopeBuforList = $getEnvelopeBuforList;
        return $this;
    }


}

