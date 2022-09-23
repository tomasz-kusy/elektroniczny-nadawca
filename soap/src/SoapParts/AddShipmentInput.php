<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing AddShipmentInput
 */
class AddShipmentInput
{

    /**
     * @var \TomaszKusy\En\AddShipment $addShipment
     */
    private $addShipment = null;

    /**
     * Gets as addShipment
     *
     * @return \TomaszKusy\En\AddShipment
     */
    public function getAddShipment()
    {
        return $this->addShipment;
    }

    /**
     * Sets a new addShipment
     *
     * @param \TomaszKusy\En\AddShipment $addShipment
     * @return self
     */
    public function setAddShipment(\TomaszKusy\En\AddShipment $addShipment)
    {
        $this->addShipment = $addShipment;
        return $this;
    }


}

