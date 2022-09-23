<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeContentShortInput
 */
class GetEnvelopeContentShortInput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeContentShort $getEnvelopeContentShort
     */
    private $getEnvelopeContentShort = null;

    /**
     * Gets as getEnvelopeContentShort
     *
     * @return \TomaszKusy\En\GetEnvelopeContentShort
     */
    public function getGetEnvelopeContentShort()
    {
        return $this->getEnvelopeContentShort;
    }

    /**
     * Sets a new getEnvelopeContentShort
     *
     * @param \TomaszKusy\En\GetEnvelopeContentShort $getEnvelopeContentShort
     * @return self
     */
    public function setGetEnvelopeContentShort(\TomaszKusy\En\GetEnvelopeContentShort $getEnvelopeContentShort)
    {
        $this->getEnvelopeContentShort = $getEnvelopeContentShort;
        return $this;
    }


}

