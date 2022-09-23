<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetListaPowodowReklamacjiInput
 */
class GetListaPowodowReklamacjiInput
{

    /**
     * @var \TomaszKusy\En\GetListaPowodowReklamacji $getListaPowodowReklamacji
     */
    private $getListaPowodowReklamacji = null;

    /**
     * Gets as getListaPowodowReklamacji
     *
     * @return \TomaszKusy\En\GetListaPowodowReklamacji
     */
    public function getGetListaPowodowReklamacji()
    {
        return $this->getListaPowodowReklamacji;
    }

    /**
     * Sets a new getListaPowodowReklamacji
     *
     * @param \TomaszKusy\En\GetListaPowodowReklamacji $getListaPowodowReklamacji
     * @return self
     */
    public function setGetListaPowodowReklamacji(\TomaszKusy\En\GetListaPowodowReklamacji $getListaPowodowReklamacji)
    {
        $this->getListaPowodowReklamacji = $getListaPowodowReklamacji;
        return $this;
    }


}

