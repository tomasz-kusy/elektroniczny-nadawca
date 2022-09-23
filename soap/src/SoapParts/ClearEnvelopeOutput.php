<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing ClearEnvelopeOutput
 */
class ClearEnvelopeOutput
{

    /**
     * @var \TomaszKusy\En\ClearEnvelopeResponse $clearEnvelopeResponse
     */
    private $clearEnvelopeResponse = null;

    /**
     * Gets as clearEnvelopeResponse
     *
     * @return \TomaszKusy\En\ClearEnvelopeResponse
     */
    public function getClearEnvelopeResponse()
    {
        return $this->clearEnvelopeResponse;
    }

    /**
     * Sets a new clearEnvelopeResponse
     *
     * @param \TomaszKusy\En\ClearEnvelopeResponse $clearEnvelopeResponse
     * @return self
     */
    public function setClearEnvelopeResponse(\TomaszKusy\En\ClearEnvelopeResponse $clearEnvelopeResponse)
    {
        $this->clearEnvelopeResponse = $clearEnvelopeResponse;
        return $this;
    }


}

