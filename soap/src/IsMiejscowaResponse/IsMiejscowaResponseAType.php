<?php

namespace TomaszKusy\En\IsMiejscowaResponse;

/**
 * Class representing IsMiejscowaResponseAType
 */
class IsMiejscowaResponseAType
{

    /**
     * @var \TomaszKusy\En\TrasaResponseType[] $trasaResponse
     */
    private $trasaResponse = [
        
    ];

    /**
     * Adds as trasaResponse
     *
     * @return self
     * @param \TomaszKusy\En\TrasaResponseType $trasaResponse
     */
    public function addToTrasaResponse(\TomaszKusy\En\TrasaResponseType $trasaResponse)
    {
        $this->trasaResponse[] = $trasaResponse;
        return $this;
    }

    /**
     * isset trasaResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrasaResponse($index)
    {
        return isset($this->trasaResponse[$index]);
    }

    /**
     * unset trasaResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrasaResponse($index)
    {
        unset($this->trasaResponse[$index]);
    }

    /**
     * Gets as trasaResponse
     *
     * @return \TomaszKusy\En\TrasaResponseType[]
     */
    public function getTrasaResponse()
    {
        return $this->trasaResponse;
    }

    /**
     * Sets a new trasaResponse
     *
     * @param \TomaszKusy\En\TrasaResponseType[] $trasaResponse
     * @return self
     */
    public function setTrasaResponse(array $trasaResponse)
    {
        $this->trasaResponse = $trasaResponse;
        return $this;
    }


}

