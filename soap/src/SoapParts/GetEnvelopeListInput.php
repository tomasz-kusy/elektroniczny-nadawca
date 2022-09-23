<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeListInput
 */
class GetEnvelopeListInput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeList $getEnvelopeList
     */
    private $getEnvelopeList = null;

    /**
     * Gets as getEnvelopeList
     *
     * @return \TomaszKusy\En\GetEnvelopeList
     */
    public function getGetEnvelopeList()
    {
        return $this->getEnvelopeList;
    }

    /**
     * Sets a new getEnvelopeList
     *
     * @param \TomaszKusy\En\GetEnvelopeList $getEnvelopeList
     * @return self
     */
    public function setGetEnvelopeList(\TomaszKusy\En\GetEnvelopeList $getEnvelopeList)
    {
        $this->getEnvelopeList = $getEnvelopeList;
        return $this;
    }


}

