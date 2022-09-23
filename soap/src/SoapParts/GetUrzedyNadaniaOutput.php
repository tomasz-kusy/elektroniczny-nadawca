<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetUrzedyNadaniaOutput
 */
class GetUrzedyNadaniaOutput
{

    /**
     * @var \TomaszKusy\En\GetUrzedyNadaniaResponse $getUrzedyNadaniaResponse
     */
    private $getUrzedyNadaniaResponse = null;

    /**
     * Gets as getUrzedyNadaniaResponse
     *
     * @return \TomaszKusy\En\GetUrzedyNadaniaResponse
     */
    public function getGetUrzedyNadaniaResponse()
    {
        return $this->getUrzedyNadaniaResponse;
    }

    /**
     * Sets a new getUrzedyNadaniaResponse
     *
     * @param \TomaszKusy\En\GetUrzedyNadaniaResponse $getUrzedyNadaniaResponse
     * @return self
     */
    public function setGetUrzedyNadaniaResponse(\TomaszKusy\En\GetUrzedyNadaniaResponse $getUrzedyNadaniaResponse)
    {
        $this->getUrzedyNadaniaResponse = $getUrzedyNadaniaResponse;
        return $this;
    }


}

