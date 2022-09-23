<?php

namespace TomaszKusy\En\GetEnvelopeBuforListResponse;

/**
 * Class representing GetEnvelopeBuforListResponseAType
 */
class GetEnvelopeBuforListResponseAType
{

    /**
     * @var \TomaszKusy\En\BuforType[] $bufor
     */
    private $bufor = [
        
    ];

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as bufor
     *
     * @return self
     * @param \TomaszKusy\En\BuforType $bufor
     */
    public function addToBufor(\TomaszKusy\En\BuforType $bufor)
    {
        $this->bufor[] = $bufor;
        return $this;
    }

    /**
     * isset bufor
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBufor($index)
    {
        return isset($this->bufor[$index]);
    }

    /**
     * unset bufor
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBufor($index)
    {
        unset($this->bufor[$index]);
    }

    /**
     * Gets as bufor
     *
     * @return \TomaszKusy\En\BuforType[]
     */
    public function getBufor()
    {
        return $this->bufor;
    }

    /**
     * Sets a new bufor
     *
     * @param \TomaszKusy\En\BuforType[] $bufor
     * @return self
     */
    public function setBufor(array $bufor)
    {
        $this->bufor = $bufor;
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

