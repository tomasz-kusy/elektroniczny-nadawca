<?php

namespace TomaszKusy\En\GetFirmowaPocztaBookResponse;

/**
 * Class representing GetFirmowaPocztaBookResponseAType
 */
class GetFirmowaPocztaBookResponseAType
{

    /**
     * @var string $pdfContent
     */
    private $pdfContent = null;

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Gets as pdfContent
     *
     * @return string
     */
    public function getPdfContent()
    {
        return $this->pdfContent;
    }

    /**
     * Sets a new pdfContent
     *
     * @param string $pdfContent
     * @return self
     */
    public function setPdfContent($pdfContent)
    {
        $this->pdfContent = $pdfContent;
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

