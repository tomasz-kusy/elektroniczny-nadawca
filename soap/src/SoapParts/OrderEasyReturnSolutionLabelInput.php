<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing OrderEasyReturnSolutionLabelInput
 */
class OrderEasyReturnSolutionLabelInput
{

    /**
     * @var \TomaszKusy\En\OrderEasyReturnSolutionLabel $orderEasyReturnSolutionLabel
     */
    private $orderEasyReturnSolutionLabel = null;

    /**
     * Gets as orderEasyReturnSolutionLabel
     *
     * @return \TomaszKusy\En\OrderEasyReturnSolutionLabel
     */
    public function getOrderEasyReturnSolutionLabel()
    {
        return $this->orderEasyReturnSolutionLabel;
    }

    /**
     * Sets a new orderEasyReturnSolutionLabel
     *
     * @param \TomaszKusy\En\OrderEasyReturnSolutionLabel $orderEasyReturnSolutionLabel
     * @return self
     */
    public function setOrderEasyReturnSolutionLabel(\TomaszKusy\En\OrderEasyReturnSolutionLabel $orderEasyReturnSolutionLabel)
    {
        $this->orderEasyReturnSolutionLabel = $orderEasyReturnSolutionLabel;
        return $this;
    }


}

