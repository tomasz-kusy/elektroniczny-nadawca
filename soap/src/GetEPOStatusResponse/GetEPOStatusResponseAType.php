<?php

namespace TomaszKusy\En\GetEPOStatusResponse;

/**
 * Class representing GetEPOStatusResponseAType
 */
class GetEPOStatusResponseAType
{

    /**
     * @var \TomaszKusy\En\PrzesylkaEPOType[] $epo
     */
    private $epo = [
        
    ];

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as epo
     *
     * @return self
     * @param \TomaszKusy\En\PrzesylkaEPOType $epo
     */
    public function addToEpo(\TomaszKusy\En\PrzesylkaEPOType $epo)
    {
        $this->epo[] = $epo;
        return $this;
    }

    /**
     * isset epo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEpo($index)
    {
        return isset($this->epo[$index]);
    }

    /**
     * unset epo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEpo($index)
    {
        unset($this->epo[$index]);
    }

    /**
     * Gets as epo
     *
     * @return \TomaszKusy\En\PrzesylkaEPOType[]
     */
    public function getEpo()
    {
        return $this->epo;
    }

    /**
     * Sets a new epo
     *
     * @param \TomaszKusy\En\PrzesylkaEPOType[] $epo
     * @return self
     */
    public function setEpo(array $epo)
    {
        $this->epo = $epo;
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

