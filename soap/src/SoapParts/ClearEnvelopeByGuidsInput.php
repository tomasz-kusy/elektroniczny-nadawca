<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing ClearEnvelopeByGuidsInput
 */
class ClearEnvelopeByGuidsInput
{

    /**
     * @var \TomaszKusy\En\ClearEnvelopeByGuids $clearEnvelopeByGuids
     */
    private $clearEnvelopeByGuids = null;

    /**
     * Gets as clearEnvelopeByGuids
     *
     * @return \TomaszKusy\En\ClearEnvelopeByGuids
     */
    public function getClearEnvelopeByGuids()
    {
        return $this->clearEnvelopeByGuids;
    }

    /**
     * Sets a new clearEnvelopeByGuids
     *
     * @param \TomaszKusy\En\ClearEnvelopeByGuids $clearEnvelopeByGuids
     * @return self
     */
    public function setClearEnvelopeByGuids(\TomaszKusy\En\ClearEnvelopeByGuids $clearEnvelopeByGuids)
    {
        $this->clearEnvelopeByGuids = $clearEnvelopeByGuids;
        return $this;
    }


}

