<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetListaZgodEZwrotowOutput
 */
class GetListaZgodEZwrotowOutput
{

    /**
     * @var \TomaszKusy\En\GetListaZgodEZwrotowResponse $getListaZgodEZwrotowResponse
     */
    private $getListaZgodEZwrotowResponse = null;

    /**
     * Gets as getListaZgodEZwrotowResponse
     *
     * @return \TomaszKusy\En\GetListaZgodEZwrotowResponse
     */
    public function getGetListaZgodEZwrotowResponse()
    {
        return $this->getListaZgodEZwrotowResponse;
    }

    /**
     * Sets a new getListaZgodEZwrotowResponse
     *
     * @param \TomaszKusy\En\GetListaZgodEZwrotowResponse $getListaZgodEZwrotowResponse
     * @return self
     */
    public function setGetListaZgodEZwrotowResponse(\TomaszKusy\En\GetListaZgodEZwrotowResponse $getListaZgodEZwrotowResponse)
    {
        $this->getListaZgodEZwrotowResponse = $getListaZgodEZwrotowResponse;
        return $this;
    }


}

