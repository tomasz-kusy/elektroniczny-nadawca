<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetZapowiedziFakturInput
 */
class GetZapowiedziFakturInput
{

    /**
     * @var \TomaszKusy\En\GetZapowiedziFaktur $getZapowiedziFaktur
     */
    private $getZapowiedziFaktur = null;

    /**
     * Gets as getZapowiedziFaktur
     *
     * @return \TomaszKusy\En\GetZapowiedziFaktur
     */
    public function getGetZapowiedziFaktur()
    {
        return $this->getZapowiedziFaktur;
    }

    /**
     * Sets a new getZapowiedziFaktur
     *
     * @param \TomaszKusy\En\GetZapowiedziFaktur $getZapowiedziFaktur
     * @return self
     */
    public function setGetZapowiedziFaktur(\TomaszKusy\En\GetZapowiedziFaktur $getZapowiedziFaktur)
    {
        $this->getZapowiedziFaktur = $getZapowiedziFaktur;
        return $this;
    }


}

