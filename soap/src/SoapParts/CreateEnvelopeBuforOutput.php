<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing CreateEnvelopeBuforOutput
 */
class CreateEnvelopeBuforOutput
{

    /**
     * @var \TomaszKusy\En\CreateEnvelopeBuforResponse $createEnvelopeBuforResponse
     */
    private $createEnvelopeBuforResponse = null;

    /**
     * Gets as createEnvelopeBuforResponse
     *
     * @return \TomaszKusy\En\CreateEnvelopeBuforResponse
     */
    public function getCreateEnvelopeBuforResponse()
    {
        return $this->createEnvelopeBuforResponse;
    }

    /**
     * Sets a new createEnvelopeBuforResponse
     *
     * @param \TomaszKusy\En\CreateEnvelopeBuforResponse $createEnvelopeBuforResponse
     * @return self
     */
    public function setCreateEnvelopeBuforResponse(\TomaszKusy\En\CreateEnvelopeBuforResponse $createEnvelopeBuforResponse)
    {
        $this->createEnvelopeBuforResponse = $createEnvelopeBuforResponse;
        return $this;
    }


}

