<?php

namespace TomaszKusy\En\DownloadIWDContentResponse;

/**
 * Class representing DownloadIWDContentResponseAType
 */
class DownloadIWDContentResponseAType
{

    /**
     * @var string $iWDContent
     */
    private $iWDContent = null;

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Gets as iWDContent
     *
     * @return string
     */
    public function getIWDContent()
    {
        return $this->iWDContent;
    }

    /**
     * Sets a new iWDContent
     *
     * @param string $iWDContent
     * @return self
     */
    public function setIWDContent($iWDContent)
    {
        $this->iWDContent = $iWDContent;
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

