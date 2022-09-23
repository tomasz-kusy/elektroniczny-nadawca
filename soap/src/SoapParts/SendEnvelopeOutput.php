<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing SendEnvelopeOutput
 */
class SendEnvelopeOutput
{

    /**
     * @var \TomaszKusy\En\SendEnvelopeResponse $sendEnvelopeResponse
     */
    private $sendEnvelopeResponse = null;

    /**
     * Gets as sendEnvelopeResponse
     *
     * @return \TomaszKusy\En\SendEnvelopeResponse
     */
    public function getSendEnvelopeResponse()
    {
        return $this->sendEnvelopeResponse;
    }

    /**
     * Sets a new sendEnvelopeResponse
     *
     * @param \TomaszKusy\En\SendEnvelopeResponse $sendEnvelopeResponse
     * @return self
     */
    public function setSendEnvelopeResponse(\TomaszKusy\En\SendEnvelopeResponse $sendEnvelopeResponse)
    {
        $this->sendEnvelopeResponse = $sendEnvelopeResponse;
        return $this;
    }


}

