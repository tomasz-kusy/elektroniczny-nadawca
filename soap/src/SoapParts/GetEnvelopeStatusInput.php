<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeStatusInput
 */
class GetEnvelopeStatusInput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeStatus $getEnvelopeStatus
     */
    private $getEnvelopeStatus = null;

    /**
     * Gets as getEnvelopeStatus
     *
     * @return \TomaszKusy\En\GetEnvelopeStatus
     */
    public function getGetEnvelopeStatus()
    {
        return $this->getEnvelopeStatus;
    }

    /**
     * Sets a new getEnvelopeStatus
     *
     * @param \TomaszKusy\En\GetEnvelopeStatus $getEnvelopeStatus
     * @return self
     */
    public function setGetEnvelopeStatus(\TomaszKusy\En\GetEnvelopeStatus $getEnvelopeStatus)
    {
        $this->getEnvelopeStatus = $getEnvelopeStatus;
        return $this;
    }


}

