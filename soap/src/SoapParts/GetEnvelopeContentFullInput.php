<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeContentFullInput
 */
class GetEnvelopeContentFullInput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeContentFull $getEnvelopeContentFull
     */
    private $getEnvelopeContentFull = null;

    /**
     * Gets as getEnvelopeContentFull
     *
     * @return \TomaszKusy\En\GetEnvelopeContentFull
     */
    public function getGetEnvelopeContentFull()
    {
        return $this->getEnvelopeContentFull;
    }

    /**
     * Sets a new getEnvelopeContentFull
     *
     * @param \TomaszKusy\En\GetEnvelopeContentFull $getEnvelopeContentFull
     * @return self
     */
    public function setGetEnvelopeContentFull(\TomaszKusy\En\GetEnvelopeContentFull $getEnvelopeContentFull)
    {
        $this->getEnvelopeContentFull = $getEnvelopeContentFull;
        return $this;
    }


}

