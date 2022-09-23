<?php

namespace TomaszKusy\En\GetEnvelopeStatusResponse;

/**
 * Class representing GetEnvelopeStatusResponseAType
 */
class GetEnvelopeStatusResponseAType
{

    /**
     * @var string $envelopeStatus
     */
    private $envelopeStatus = null;

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Gets as envelopeStatus
     *
     * @return string
     */
    public function getEnvelopeStatus()
    {
        return $this->envelopeStatus;
    }

    /**
     * Sets a new envelopeStatus
     *
     * @param string $envelopeStatus
     * @return self
     */
    public function setEnvelopeStatus($envelopeStatus)
    {
        $this->envelopeStatus = $envelopeStatus;
        return $this;
    }

    /**
     * Adds as error
     *
     * @return self
     * @param \TomaszKusy\En\ErrorType $error
     */
    public function addToError(\TomaszKusy\En\ErrorType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return \TomaszKusy\En\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \TomaszKusy\En\ErrorType[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }


}

