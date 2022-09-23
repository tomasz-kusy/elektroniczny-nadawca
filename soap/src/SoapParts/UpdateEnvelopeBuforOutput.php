<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing UpdateEnvelopeBuforOutput
 */
class UpdateEnvelopeBuforOutput
{

    /**
     * @var \TomaszKusy\En\UpdateEnvelopeBuforResponse $updateEnvelopeBuforResponse
     */
    private $updateEnvelopeBuforResponse = null;

    /**
     * Gets as updateEnvelopeBuforResponse
     *
     * @return \TomaszKusy\En\UpdateEnvelopeBuforResponse
     */
    public function getUpdateEnvelopeBuforResponse()
    {
        return $this->updateEnvelopeBuforResponse;
    }

    /**
     * Sets a new updateEnvelopeBuforResponse
     *
     * @param \TomaszKusy\En\UpdateEnvelopeBuforResponse $updateEnvelopeBuforResponse
     * @return self
     */
    public function setUpdateEnvelopeBuforResponse(\TomaszKusy\En\UpdateEnvelopeBuforResponse $updateEnvelopeBuforResponse)
    {
        $this->updateEnvelopeBuforResponse = $updateEnvelopeBuforResponse;
        return $this;
    }


}

