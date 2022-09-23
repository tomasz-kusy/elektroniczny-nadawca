<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing AddZalacznikDoReklamacjiInput
 */
class AddZalacznikDoReklamacjiInput
{

    /**
     * @var \TomaszKusy\En\AddZalacznikDoReklamacji $addZalacznikDoReklamacji
     */
    private $addZalacznikDoReklamacji = null;

    /**
     * Gets as addZalacznikDoReklamacji
     *
     * @return \TomaszKusy\En\AddZalacznikDoReklamacji
     */
    public function getAddZalacznikDoReklamacji()
    {
        return $this->addZalacznikDoReklamacji;
    }

    /**
     * Sets a new addZalacznikDoReklamacji
     *
     * @param \TomaszKusy\En\AddZalacznikDoReklamacji $addZalacznikDoReklamacji
     * @return self
     */
    public function setAddZalacznikDoReklamacji(\TomaszKusy\En\AddZalacznikDoReklamacji $addZalacznikDoReklamacji)
    {
        $this->addZalacznikDoReklamacji = $addZalacznikDoReklamacji;
        return $this;
    }


}

