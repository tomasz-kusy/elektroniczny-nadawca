<?php

namespace TomaszKusy\En\IsMiejscowa;

/**
 * Class representing IsMiejscowaAType
 */
class IsMiejscowaAType
{

    /**
     * @var \TomaszKusy\En\TrasaRequestType[] $trasaRequest
     */
    private $trasaRequest = [
        
    ];

    /**
     * Adds as trasaRequest
     *
     * @return self
     * @param \TomaszKusy\En\TrasaRequestType $trasaRequest
     */
    public function addToTrasaRequest(\TomaszKusy\En\TrasaRequestType $trasaRequest)
    {
        $this->trasaRequest[] = $trasaRequest;
        return $this;
    }

    /**
     * isset trasaRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrasaRequest($index)
    {
        return isset($this->trasaRequest[$index]);
    }

    /**
     * unset trasaRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrasaRequest($index)
    {
        unset($this->trasaRequest[$index]);
    }

    /**
     * Gets as trasaRequest
     *
     * @return \TomaszKusy\En\TrasaRequestType[]
     */
    public function getTrasaRequest()
    {
        return $this->trasaRequest;
    }

    /**
     * Sets a new trasaRequest
     *
     * @param \TomaszKusy\En\TrasaRequestType[] $trasaRequest
     * @return self
     */
    public function setTrasaRequest(array $trasaRequest)
    {
        $this->trasaRequest = $trasaRequest;
        return $this;
    }


}

