<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing OrderEasyReturnSolutionLabelOutput
 */
class OrderEasyReturnSolutionLabelOutput
{

    /**
     * @var \TomaszKusy\En\OrderEasyReturnSolutionLabelResponse $orderEasyReturnSolutionLabelResponse
     */
    private $orderEasyReturnSolutionLabelResponse = null;

    /**
     * Gets as orderEasyReturnSolutionLabelResponse
     *
     * @return \TomaszKusy\En\OrderEasyReturnSolutionLabelResponse
     */
    public function getOrderEasyReturnSolutionLabelResponse()
    {
        return $this->orderEasyReturnSolutionLabelResponse;
    }

    /**
     * Sets a new orderEasyReturnSolutionLabelResponse
     *
     * @param \TomaszKusy\En\OrderEasyReturnSolutionLabelResponse $orderEasyReturnSolutionLabelResponse
     * @return self
     */
    public function setOrderEasyReturnSolutionLabelResponse(\TomaszKusy\En\OrderEasyReturnSolutionLabelResponse $orderEasyReturnSolutionLabelResponse)
    {
        $this->orderEasyReturnSolutionLabelResponse = $orderEasyReturnSolutionLabelResponse;
        return $this;
    }


}

