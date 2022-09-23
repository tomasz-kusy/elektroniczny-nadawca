<?php

namespace TomaszKusy\En\AddShipmentResponse;

/**
 * Class representing AddShipmentResponseAType
 */
class AddShipmentResponseAType
{

    /**
     * @var \TomaszKusy\En\AddShipmentResponseItemType[] $retval
     */
    private $retval = [
        
    ];

    /**
     * Adds as retval
     *
     * @return self
     * @param \TomaszKusy\En\AddShipmentResponseItemType $retval
     */
    public function addToRetval(\TomaszKusy\En\AddShipmentResponseItemType $retval)
    {
        $this->retval[] = $retval;
        return $this;
    }

    /**
     * isset retval
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRetval($index)
    {
        return isset($this->retval[$index]);
    }

    /**
     * unset retval
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRetval($index)
    {
        unset($this->retval[$index]);
    }

    /**
     * Gets as retval
     *
     * @return \TomaszKusy\En\AddShipmentResponseItemType[]
     */
    public function getRetval()
    {
        return $this->retval;
    }

    /**
     * Sets a new retval
     *
     * @param \TomaszKusy\En\AddShipmentResponseItemType[] $retval
     * @return self
     */
    public function setRetval(array $retval)
    {
        $this->retval = $retval;
        return $this;
    }


}

