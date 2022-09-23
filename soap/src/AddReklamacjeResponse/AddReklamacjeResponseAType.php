<?php

namespace TomaszKusy\En\AddReklamacjeResponse;

/**
 * Class representing AddReklamacjeResponseAType
 */
class AddReklamacjeResponseAType
{

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * @var \TomaszKusy\En\ReklamacjaInfoType[] $reklamacjaInfo
     */
    private $reklamacjaInfo = [
        
    ];

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

    /**
     * Adds as reklamacjaInfo
     *
     * @return self
     * @param \TomaszKusy\En\ReklamacjaInfoType $reklamacjaInfo
     */
    public function addToReklamacjaInfo(\TomaszKusy\En\ReklamacjaInfoType $reklamacjaInfo)
    {
        $this->reklamacjaInfo[] = $reklamacjaInfo;
        return $this;
    }

    /**
     * isset reklamacjaInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReklamacjaInfo($index)
    {
        return isset($this->reklamacjaInfo[$index]);
    }

    /**
     * unset reklamacjaInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReklamacjaInfo($index)
    {
        unset($this->reklamacjaInfo[$index]);
    }

    /**
     * Gets as reklamacjaInfo
     *
     * @return \TomaszKusy\En\ReklamacjaInfoType[]
     */
    public function getReklamacjaInfo()
    {
        return $this->reklamacjaInfo;
    }

    /**
     * Sets a new reklamacjaInfo
     *
     * @param \TomaszKusy\En\ReklamacjaInfoType[] $reklamacjaInfo
     * @return self
     */
    public function setReklamacjaInfo(array $reklamacjaInfo)
    {
        $this->reklamacjaInfo = $reklamacjaInfo;
        return $this;
    }


}

