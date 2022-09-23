<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing MoveShipmentsInput
 */
class MoveShipmentsInput
{

    /**
     * @var \TomaszKusy\En\MoveShipments $moveShipments
     */
    private $moveShipments = null;

    /**
     * Gets as moveShipments
     *
     * @return \TomaszKusy\En\MoveShipments
     */
    public function getMoveShipments()
    {
        return $this->moveShipments;
    }

    /**
     * Sets a new moveShipments
     *
     * @param \TomaszKusy\En\MoveShipments $moveShipments
     * @return self
     */
    public function setMoveShipments(\TomaszKusy\En\MoveShipments $moveShipments)
    {
        $this->moveShipments = $moveShipments;
        return $this;
    }


}

