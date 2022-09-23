<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetPrintForParcelOutput
 */
class GetPrintForParcelOutput
{

    /**
     * @var \TomaszKusy\En\GetPrintForParcelResponse $getPrintForParcelResponse
     */
    private $getPrintForParcelResponse = null;

    /**
     * Gets as getPrintForParcelResponse
     *
     * @return \TomaszKusy\En\GetPrintForParcelResponse
     */
    public function getGetPrintForParcelResponse()
    {
        return $this->getPrintForParcelResponse;
    }

    /**
     * Sets a new getPrintForParcelResponse
     *
     * @param \TomaszKusy\En\GetPrintForParcelResponse $getPrintForParcelResponse
     * @return self
     */
    public function setGetPrintForParcelResponse(\TomaszKusy\En\GetPrintForParcelResponse $getPrintForParcelResponse)
    {
        $this->getPrintForParcelResponse = $getPrintForParcelResponse;
        return $this;
    }


}

