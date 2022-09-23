<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing UpdateEnvelopeBuforInput
 */
class UpdateEnvelopeBuforInput
{

    /**
     * @var \TomaszKusy\En\UpdateEnvelopeBufor $updateEnvelopeBufor
     */
    private $updateEnvelopeBufor = null;

    /**
     * Gets as updateEnvelopeBufor
     *
     * @return \TomaszKusy\En\UpdateEnvelopeBufor
     */
    public function getUpdateEnvelopeBufor()
    {
        return $this->updateEnvelopeBufor;
    }

    /**
     * Sets a new updateEnvelopeBufor
     *
     * @param \TomaszKusy\En\UpdateEnvelopeBufor $updateEnvelopeBufor
     * @return self
     */
    public function setUpdateEnvelopeBufor(\TomaszKusy\En\UpdateEnvelopeBufor $updateEnvelopeBufor)
    {
        $this->updateEnvelopeBufor = $updateEnvelopeBufor;
        return $this;
    }


}

