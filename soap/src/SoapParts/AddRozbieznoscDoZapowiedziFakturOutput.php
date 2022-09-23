<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing AddRozbieznoscDoZapowiedziFakturOutput
 */
class AddRozbieznoscDoZapowiedziFakturOutput
{

    /**
     * @var \TomaszKusy\En\AddRozbieznoscDoZapowiedziFakturResponse $addRozbieznoscDoZapowiedziFakturResponse
     */
    private $addRozbieznoscDoZapowiedziFakturResponse = null;

    /**
     * Gets as addRozbieznoscDoZapowiedziFakturResponse
     *
     * @return \TomaszKusy\En\AddRozbieznoscDoZapowiedziFakturResponse
     */
    public function getAddRozbieznoscDoZapowiedziFakturResponse()
    {
        return $this->addRozbieznoscDoZapowiedziFakturResponse;
    }

    /**
     * Sets a new addRozbieznoscDoZapowiedziFakturResponse
     *
     * @param \TomaszKusy\En\AddRozbieznoscDoZapowiedziFakturResponse $addRozbieznoscDoZapowiedziFakturResponse
     * @return self
     */
    public function setAddRozbieznoscDoZapowiedziFakturResponse(\TomaszKusy\En\AddRozbieznoscDoZapowiedziFakturResponse $addRozbieznoscDoZapowiedziFakturResponse)
    {
        $this->addRozbieznoscDoZapowiedziFakturResponse = $addRozbieznoscDoZapowiedziFakturResponse;
        return $this;
    }


}

