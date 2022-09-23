<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetListaZgodEZwrotowInput
 */
class GetListaZgodEZwrotowInput
{

    /**
     * @var \TomaszKusy\En\GetListaZgodEZwrotow $getListaZgodEZwrotow
     */
    private $getListaZgodEZwrotow = null;

    /**
     * Gets as getListaZgodEZwrotow
     *
     * @return \TomaszKusy\En\GetListaZgodEZwrotow
     */
    public function getGetListaZgodEZwrotow()
    {
        return $this->getListaZgodEZwrotow;
    }

    /**
     * Sets a new getListaZgodEZwrotow
     *
     * @param \TomaszKusy\En\GetListaZgodEZwrotow $getListaZgodEZwrotow
     * @return self
     */
    public function setGetListaZgodEZwrotow(\TomaszKusy\En\GetListaZgodEZwrotow $getListaZgodEZwrotow)
    {
        $this->getListaZgodEZwrotow = $getListaZgodEZwrotow;
        return $this;
    }


}

