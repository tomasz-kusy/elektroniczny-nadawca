<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing ClearEnvelopeByGuidsOutput
 */
class ClearEnvelopeByGuidsOutput
{

    /**
     * @var \TomaszKusy\En\ClearEnvelopeByGuidsResponse $clearEnvelopeByGuidsResponse
     */
    private $clearEnvelopeByGuidsResponse = null;

    /**
     * Gets as clearEnvelopeByGuidsResponse
     *
     * @return \TomaszKusy\En\ClearEnvelopeByGuidsResponse
     */
    public function getClearEnvelopeByGuidsResponse()
    {
        return $this->clearEnvelopeByGuidsResponse;
    }

    /**
     * Sets a new clearEnvelopeByGuidsResponse
     *
     * @param \TomaszKusy\En\ClearEnvelopeByGuidsResponse $clearEnvelopeByGuidsResponse
     * @return self
     */
    public function setClearEnvelopeByGuidsResponse(\TomaszKusy\En\ClearEnvelopeByGuidsResponse $clearEnvelopeByGuidsResponse)
    {
        $this->clearEnvelopeByGuidsResponse = $clearEnvelopeByGuidsResponse;
        return $this;
    }


}

