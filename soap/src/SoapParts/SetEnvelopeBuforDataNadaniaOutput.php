<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing SetEnvelopeBuforDataNadaniaOutput
 */
class SetEnvelopeBuforDataNadaniaOutput
{

    /**
     * @var \TomaszKusy\En\SetEnvelopeBuforDataNadaniaResponse $setEnvelopeBuforDataNadaniaResponse
     */
    private $setEnvelopeBuforDataNadaniaResponse = null;

    /**
     * Gets as setEnvelopeBuforDataNadaniaResponse
     *
     * @return \TomaszKusy\En\SetEnvelopeBuforDataNadaniaResponse
     */
    public function getSetEnvelopeBuforDataNadaniaResponse()
    {
        return $this->setEnvelopeBuforDataNadaniaResponse;
    }

    /**
     * Sets a new setEnvelopeBuforDataNadaniaResponse
     *
     * @param \TomaszKusy\En\SetEnvelopeBuforDataNadaniaResponse $setEnvelopeBuforDataNadaniaResponse
     * @return self
     */
    public function setSetEnvelopeBuforDataNadaniaResponse(\TomaszKusy\En\SetEnvelopeBuforDataNadaniaResponse $setEnvelopeBuforDataNadaniaResponse)
    {
        $this->setEnvelopeBuforDataNadaniaResponse = $setEnvelopeBuforDataNadaniaResponse;
        return $this;
    }


}

