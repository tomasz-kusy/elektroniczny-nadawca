<?php

namespace TomaszKusy\En\GetKierunkiInfoResponse;

/**
 * Class representing GetKierunkiInfoResponseAType
 */
class GetKierunkiInfoResponseAType
{

    /**
     * @var \DateTime $lastUpdate
     */
    private $lastUpdate = null;

    /**
     * @var \TomaszKusy\En\UslugiType[] $usluga
     */
    private $usluga = [
        
    ];

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Gets as lastUpdate
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Sets a new lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return self
     */
    public function setLastUpdate(\DateTime $lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

    /**
     * Adds as usluga
     *
     * @return self
     * @param \TomaszKusy\En\UslugiType $usluga
     */
    public function addToUsluga(\TomaszKusy\En\UslugiType $usluga)
    {
        $this->usluga[] = $usluga;
        return $this;
    }

    /**
     * isset usluga
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsluga($index)
    {
        return isset($this->usluga[$index]);
    }

    /**
     * unset usluga
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsluga($index)
    {
        unset($this->usluga[$index]);
    }

    /**
     * Gets as usluga
     *
     * @return \TomaszKusy\En\UslugiType[]
     */
    public function getUsluga()
    {
        return $this->usluga;
    }

    /**
     * Sets a new usluga
     *
     * @param \TomaszKusy\En\UslugiType[] $usluga
     * @return self
     */
    public function setUsluga(array $usluga)
    {
        $this->usluga = $usluga;
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

