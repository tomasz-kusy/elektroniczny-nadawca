<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing AddOdwolanieDoReklamacjiInput
 */
class AddOdwolanieDoReklamacjiInput
{

    /**
     * @var \TomaszKusy\En\AddOdwolanieDoReklamacji $addOdwolanieDoReklamacji
     */
    private $addOdwolanieDoReklamacji = null;

    /**
     * Gets as addOdwolanieDoReklamacji
     *
     * @return \TomaszKusy\En\AddOdwolanieDoReklamacji
     */
    public function getAddOdwolanieDoReklamacji()
    {
        return $this->addOdwolanieDoReklamacji;
    }

    /**
     * Sets a new addOdwolanieDoReklamacji
     *
     * @param \TomaszKusy\En\AddOdwolanieDoReklamacji $addOdwolanieDoReklamacji
     * @return self
     */
    public function setAddOdwolanieDoReklamacji(\TomaszKusy\En\AddOdwolanieDoReklamacji $addOdwolanieDoReklamacji)
    {
        $this->addOdwolanieDoReklamacji = $addOdwolanieDoReklamacji;
        return $this;
    }


}

