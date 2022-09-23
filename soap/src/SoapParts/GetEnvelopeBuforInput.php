<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetEnvelopeBuforInput
 */
class GetEnvelopeBuforInput
{

    /**
     * @var \TomaszKusy\En\GetEnvelopeBufor $getEnvelopeBufor
     */
    private $getEnvelopeBufor = null;

    /**
     * Gets as getEnvelopeBufor
     *
     * @return \TomaszKusy\En\GetEnvelopeBufor
     */
    public function getGetEnvelopeBufor()
    {
        return $this->getEnvelopeBufor;
    }

    /**
     * Sets a new getEnvelopeBufor
     *
     * @param \TomaszKusy\En\GetEnvelopeBufor $getEnvelopeBufor
     * @return self
     */
    public function setGetEnvelopeBufor(\TomaszKusy\En\GetEnvelopeBufor $getEnvelopeBufor)
    {
        $this->getEnvelopeBufor = $getEnvelopeBufor;
        return $this;
    }


}

