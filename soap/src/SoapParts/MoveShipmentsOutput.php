<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing MoveShipmentsOutput
 */
class MoveShipmentsOutput
{

    /**
     * @var \TomaszKusy\En\MoveShipmentsResponse $moveShipmentsResponse
     */
    private $moveShipmentsResponse = null;

    /**
     * Gets as moveShipmentsResponse
     *
     * @return \TomaszKusy\En\MoveShipmentsResponse
     */
    public function getMoveShipmentsResponse()
    {
        return $this->moveShipmentsResponse;
    }

    /**
     * Sets a new moveShipmentsResponse
     *
     * @param \TomaszKusy\En\MoveShipmentsResponse $moveShipmentsResponse
     * @return self
     */
    public function setMoveShipmentsResponse(\TomaszKusy\En\MoveShipmentsResponse $moveShipmentsResponse)
    {
        $this->moveShipmentsResponse = $moveShipmentsResponse;
        return $this;
    }


}

