<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing IsObszarMiastoOutput
 */
class IsObszarMiastoOutput
{

    /**
     * @var \TomaszKusy\En\IsObszarMiastoResponse $isObszarMiastoResponse
     */
    private $isObszarMiastoResponse = null;

    /**
     * Gets as isObszarMiastoResponse
     *
     * @return \TomaszKusy\En\IsObszarMiastoResponse
     */
    public function getIsObszarMiastoResponse()
    {
        return $this->isObszarMiastoResponse;
    }

    /**
     * Sets a new isObszarMiastoResponse
     *
     * @param \TomaszKusy\En\IsObszarMiastoResponse $isObszarMiastoResponse
     * @return self
     */
    public function setIsObszarMiastoResponse(\TomaszKusy\En\IsObszarMiastoResponse $isObszarMiastoResponse)
    {
        $this->isObszarMiastoResponse = $isObszarMiastoResponse;
        return $this;
    }


}

