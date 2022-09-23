<?php

namespace TomaszKusy\En\ClearEnvelopeResponse;

/**
 * Class representing ClearEnvelopeResponseAType
 */
class ClearEnvelopeResponseAType
{

    /**
     * @var bool $retval
     */
    private $retval = null;

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Gets as retval
     *
     * @return bool
     */
    public function getRetval()
    {
        return $this->retval;
    }

    /**
     * Sets a new retval
     *
     * @param bool $retval
     * @return self
     */
    public function setRetval($retval)
    {
        $this->retval = $retval;
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

