<?php

namespace TomaszKusy\En\GetWplatyCKPResponse;

/**
 * Class representing GetWplatyCKPResponseAType
 */
class GetWplatyCKPResponseAType
{

    /**
     * @var \TomaszKusy\En\WplataCKPType[] $wplaty
     */
    private $wplaty = [
        
    ];

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as wplaty
     *
     * @return self
     * @param \TomaszKusy\En\WplataCKPType $wplaty
     */
    public function addToWplaty(\TomaszKusy\En\WplataCKPType $wplaty)
    {
        $this->wplaty[] = $wplaty;
        return $this;
    }

    /**
     * isset wplaty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWplaty($index)
    {
        return isset($this->wplaty[$index]);
    }

    /**
     * unset wplaty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWplaty($index)
    {
        unset($this->wplaty[$index]);
    }

    /**
     * Gets as wplaty
     *
     * @return \TomaszKusy\En\WplataCKPType[]
     */
    public function getWplaty()
    {
        return $this->wplaty;
    }

    /**
     * Sets a new wplaty
     *
     * @param \TomaszKusy\En\WplataCKPType[] $wplaty
     * @return self
     */
    public function setWplaty(array $wplaty)
    {
        $this->wplaty = $wplaty;
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

