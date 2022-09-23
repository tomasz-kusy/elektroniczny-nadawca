<?php

namespace TomaszKusy\En\GetKartyResponse;

/**
 * Class representing GetKartyResponseAType
 */
class GetKartyResponseAType
{

    /**
     * @var \TomaszKusy\En\KartaType[] $karta
     */
    private $karta = [
        
    ];

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as karta
     *
     * @return self
     * @param \TomaszKusy\En\KartaType $karta
     */
    public function addToKarta(\TomaszKusy\En\KartaType $karta)
    {
        $this->karta[] = $karta;
        return $this;
    }

    /**
     * isset karta
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKarta($index)
    {
        return isset($this->karta[$index]);
    }

    /**
     * unset karta
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKarta($index)
    {
        unset($this->karta[$index]);
    }

    /**
     * Gets as karta
     *
     * @return \TomaszKusy\En\KartaType[]
     */
    public function getKarta()
    {
        return $this->karta;
    }

    /**
     * Sets a new karta
     *
     * @param \TomaszKusy\En\KartaType[] $karta
     * @return self
     */
    public function setKarta(array $karta)
    {
        $this->karta = $karta;
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

