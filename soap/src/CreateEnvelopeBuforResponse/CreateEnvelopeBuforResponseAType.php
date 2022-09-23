<?php

namespace TomaszKusy\En\CreateEnvelopeBuforResponse;

/**
 * Class representing CreateEnvelopeBuforResponseAType
 */
class CreateEnvelopeBuforResponseAType
{

    /**
     * @var \TomaszKusy\En\BuforType[] $createdBufor
     */
    private $createdBufor = [
        
    ];

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as createdBufor
     *
     * @return self
     * @param \TomaszKusy\En\BuforType $createdBufor
     */
    public function addToCreatedBufor(\TomaszKusy\En\BuforType $createdBufor)
    {
        $this->createdBufor[] = $createdBufor;
        return $this;
    }

    /**
     * isset createdBufor
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreatedBufor($index)
    {
        return isset($this->createdBufor[$index]);
    }

    /**
     * unset createdBufor
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreatedBufor($index)
    {
        unset($this->createdBufor[$index]);
    }

    /**
     * Gets as createdBufor
     *
     * @return \TomaszKusy\En\BuforType[]
     */
    public function getCreatedBufor()
    {
        return $this->createdBufor;
    }

    /**
     * Sets a new createdBufor
     *
     * @param \TomaszKusy\En\BuforType[] $createdBufor
     * @return self
     */
    public function setCreatedBufor(array $createdBufor)
    {
        $this->createdBufor = $createdBufor;
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

