<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetKartyInput
 */
class GetKartyInput
{

    /**
     * @var \TomaszKusy\En\GetKarty $getKarty
     */
    private $getKarty = null;

    /**
     * Gets as getKarty
     *
     * @return \TomaszKusy\En\GetKarty
     */
    public function getGetKarty()
    {
        return $this->getKarty;
    }

    /**
     * Sets a new getKarty
     *
     * @param \TomaszKusy\En\GetKarty $getKarty
     * @return self
     */
    public function setGetKarty(\TomaszKusy\En\GetKarty $getKarty)
    {
        $this->getKarty = $getKarty;
        return $this;
    }


}

