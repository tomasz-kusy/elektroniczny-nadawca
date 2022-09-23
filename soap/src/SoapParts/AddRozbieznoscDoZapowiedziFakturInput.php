<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing AddRozbieznoscDoZapowiedziFakturInput
 */
class AddRozbieznoscDoZapowiedziFakturInput
{

    /**
     * @var \TomaszKusy\En\AddRozbieznoscDoZapowiedziFaktur $addRozbieznoscDoZapowiedziFaktur
     */
    private $addRozbieznoscDoZapowiedziFaktur = null;

    /**
     * Gets as addRozbieznoscDoZapowiedziFaktur
     *
     * @return \TomaszKusy\En\AddRozbieznoscDoZapowiedziFaktur
     */
    public function getAddRozbieznoscDoZapowiedziFaktur()
    {
        return $this->addRozbieznoscDoZapowiedziFaktur;
    }

    /**
     * Sets a new addRozbieznoscDoZapowiedziFaktur
     *
     * @param \TomaszKusy\En\AddRozbieznoscDoZapowiedziFaktur $addRozbieznoscDoZapowiedziFaktur
     * @return self
     */
    public function setAddRozbieznoscDoZapowiedziFaktur(\TomaszKusy\En\AddRozbieznoscDoZapowiedziFaktur $addRozbieznoscDoZapowiedziFaktur)
    {
        $this->addRozbieznoscDoZapowiedziFaktur = $addRozbieznoscDoZapowiedziFaktur;
        return $this;
    }


}

