<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing AddShipmentOutput
 */
class AddShipmentOutput
{

    /**
     * @var \TomaszKusy\En\AddShipmentResponse $addShipmentResponse
     */
    private $addShipmentResponse = null;

    /**
     * Gets as addShipmentResponse
     *
     * @return \TomaszKusy\En\AddShipmentResponse
     */
    public function getAddShipmentResponse()
    {
        return $this->addShipmentResponse;
    }

    /**
     * Sets a new addShipmentResponse
     *
     * @param \TomaszKusy\En\AddShipmentResponse $addShipmentResponse
     * @return self
     */
    public function setAddShipmentResponse(\TomaszKusy\En\AddShipmentResponse $addShipmentResponse)
    {
        $this->addShipmentResponse = $addShipmentResponse;
        return $this;
    }


}

