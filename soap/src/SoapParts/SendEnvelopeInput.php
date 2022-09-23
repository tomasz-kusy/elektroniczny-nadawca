<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing SendEnvelopeInput
 */
class SendEnvelopeInput
{

    /**
     * @var \TomaszKusy\En\SendEnvelope $sendEnvelope
     */
    private $sendEnvelope = null;

    /**
     * Gets as sendEnvelope
     *
     * @return \TomaszKusy\En\SendEnvelope
     */
    public function getSendEnvelope()
    {
        return $this->sendEnvelope;
    }

    /**
     * Sets a new sendEnvelope
     *
     * @param \TomaszKusy\En\SendEnvelope $sendEnvelope
     * @return self
     */
    public function setSendEnvelope(\TomaszKusy\En\SendEnvelope $sendEnvelope)
    {
        $this->sendEnvelope = $sendEnvelope;
        return $this;
    }


}

