<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing CancelReklamacjaInput
 */
class CancelReklamacjaInput
{

    /**
     * @var \TomaszKusy\En\CancelReklamacja $cancelReklamacja
     */
    private $cancelReklamacja = null;

    /**
     * Gets as cancelReklamacja
     *
     * @return \TomaszKusy\En\CancelReklamacja
     */
    public function getCancelReklamacja()
    {
        return $this->cancelReklamacja;
    }

    /**
     * Sets a new cancelReklamacja
     *
     * @param \TomaszKusy\En\CancelReklamacja $cancelReklamacja
     * @return self
     */
    public function setCancelReklamacja(\TomaszKusy\En\CancelReklamacja $cancelReklamacja)
    {
        $this->cancelReklamacja = $cancelReklamacja;
        return $this;
    }


}

