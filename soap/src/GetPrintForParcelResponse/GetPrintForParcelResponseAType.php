<?php

namespace TomaszKusy\En\GetPrintForParcelResponse;

/**
 * Class representing GetPrintForParcelResponseAType
 */
class GetPrintForParcelResponseAType
{

    /**
     * @var \TomaszKusy\En\PrintResultType[] $printResult
     */
    private $printResult = [
        
    ];

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as printResult
     *
     * @return self
     * @param \TomaszKusy\En\PrintResultType $printResult
     */
    public function addToPrintResult(\TomaszKusy\En\PrintResultType $printResult)
    {
        $this->printResult[] = $printResult;
        return $this;
    }

    /**
     * isset printResult
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrintResult($index)
    {
        return isset($this->printResult[$index]);
    }

    /**
     * unset printResult
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrintResult($index)
    {
        unset($this->printResult[$index]);
    }

    /**
     * Gets as printResult
     *
     * @return \TomaszKusy\En\PrintResultType[]
     */
    public function getPrintResult()
    {
        return $this->printResult;
    }

    /**
     * Sets a new printResult
     *
     * @param \TomaszKusy\En\PrintResultType[] $printResult
     * @return self
     */
    public function setPrintResult(array $printResult)
    {
        $this->printResult = $printResult;
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

