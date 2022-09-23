<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing CreateEnvelopeBuforInput
 */
class CreateEnvelopeBuforInput
{

    /**
     * @var \TomaszKusy\En\CreateEnvelopeBufor $createEnvelopeBufor
     */
    private $createEnvelopeBufor = null;

    /**
     * Gets as createEnvelopeBufor
     *
     * @return \TomaszKusy\En\CreateEnvelopeBufor
     */
    public function getCreateEnvelopeBufor()
    {
        return $this->createEnvelopeBufor;
    }

    /**
     * Sets a new createEnvelopeBufor
     *
     * @param \TomaszKusy\En\CreateEnvelopeBufor $createEnvelopeBufor
     * @return self
     */
    public function setCreateEnvelopeBufor(\TomaszKusy\En\CreateEnvelopeBufor $createEnvelopeBufor)
    {
        $this->createEnvelopeBufor = $createEnvelopeBufor;
        return $this;
    }


}

