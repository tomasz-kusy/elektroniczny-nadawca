<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetPrintForParcelInput
 */
class GetPrintForParcelInput
{

    /**
     * @var \TomaszKusy\En\GetPrintForParcel $getPrintForParcel
     */
    private $getPrintForParcel = null;

    /**
     * Gets as getPrintForParcel
     *
     * @return \TomaszKusy\En\GetPrintForParcel
     */
    public function getGetPrintForParcel()
    {
        return $this->getPrintForParcel;
    }

    /**
     * Sets a new getPrintForParcel
     *
     * @param \TomaszKusy\En\GetPrintForParcel $getPrintForParcel
     * @return self
     */
    public function setGetPrintForParcel(\TomaszKusy\En\GetPrintForParcel $getPrintForParcel)
    {
        $this->getPrintForParcel = $getPrintForParcel;
        return $this;
    }


}

