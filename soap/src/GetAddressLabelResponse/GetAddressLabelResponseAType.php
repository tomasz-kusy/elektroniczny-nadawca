<?php

namespace TomaszKusy\En\GetAddressLabelResponse;

/**
 * Class representing GetAddressLabelResponseAType
 */
class GetAddressLabelResponseAType
{

    /**
     * @var \TomaszKusy\En\AddressLabelContentType[] $content
     */
    private $content = [
        
    ];

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as content
     *
     * @return self
     * @param \TomaszKusy\En\AddressLabelContentType $content
     */
    public function addToContent(\TomaszKusy\En\AddressLabelContentType $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContent($index)
    {
        return isset($this->content[$index]);
    }

    /**
     * unset content
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContent($index)
    {
        unset($this->content[$index]);
    }

    /**
     * Gets as content
     *
     * @return \TomaszKusy\En\AddressLabelContentType[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * @param \TomaszKusy\En\AddressLabelContentType[] $content
     * @return self
     */
    public function setContent(array $content)
    {
        $this->content = $content;
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

