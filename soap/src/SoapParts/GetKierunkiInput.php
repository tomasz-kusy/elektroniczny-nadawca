<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetKierunkiInput
 */
class GetKierunkiInput
{

    /**
     * @var \TomaszKusy\En\GetKierunki $getKierunki
     */
    private $getKierunki = null;

    /**
     * Gets as getKierunki
     *
     * @return \TomaszKusy\En\GetKierunki
     */
    public function getGetKierunki()
    {
        return $this->getKierunki;
    }

    /**
     * Sets a new getKierunki
     *
     * @param \TomaszKusy\En\GetKierunki $getKierunki
     * @return self
     */
    public function setGetKierunki(\TomaszKusy\En\GetKierunki $getKierunki)
    {
        $this->getKierunki = $getKierunki;
        return $this;
    }


}

