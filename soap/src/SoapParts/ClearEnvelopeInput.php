<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing ClearEnvelopeInput
 */
class ClearEnvelopeInput
{

    /**
     * @var \TomaszKusy\En\ClearEnvelope $clearEnvelope
     */
    private $clearEnvelope = null;

    /**
     * Gets as clearEnvelope
     *
     * @return \TomaszKusy\En\ClearEnvelope
     */
    public function getClearEnvelope()
    {
        return $this->clearEnvelope;
    }

    /**
     * Sets a new clearEnvelope
     *
     * @param \TomaszKusy\En\ClearEnvelope $clearEnvelope
     * @return self
     */
    public function setClearEnvelope(\TomaszKusy\En\ClearEnvelope $clearEnvelope)
    {
        $this->clearEnvelope = $clearEnvelope;
        return $this;
    }


}

