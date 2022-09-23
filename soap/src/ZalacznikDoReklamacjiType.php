<?php

namespace TomaszKusy\En;

/**
 * Class representing ZalacznikDoReklamacjiType
 *
 *
 * XSD Type: zalacznikDoReklamacjiType
 */
class ZalacznikDoReklamacjiType
{

    /**
     * @var string $fileContent
     */
    private $fileContent = null;

    /**
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * @var string $fileDesc
     */
    private $fileDesc = null;

    /**
     * Gets as fileContent
     *
     * @return string
     */
    public function getFileContent()
    {
        return $this->fileContent;
    }

    /**
     * Sets a new fileContent
     *
     * @param string $fileContent
     * @return self
     */
    public function setFileContent($fileContent)
    {
        $this->fileContent = $fileContent;
        return $this;
    }

    /**
     * Gets as fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as fileDesc
     *
     * @return string
     */
    public function getFileDesc()
    {
        return $this->fileDesc;
    }

    /**
     * Sets a new fileDesc
     *
     * @param string $fileDesc
     * @return self
     */
    public function setFileDesc($fileDesc)
    {
        $this->fileDesc = $fileDesc;
        return $this;
    }


}

