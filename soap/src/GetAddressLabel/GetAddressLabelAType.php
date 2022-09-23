<?php

namespace TomaszKusy\En\GetAddressLabel;

/**
 * Class representing GetAddressLabelAType
 */
class GetAddressLabelAType
{

    /**
     * @var int $idEnvelope
     */
    private $idEnvelope = null;

    /**
     * Gets as idEnvelope
     *
     * @return int
     */
    public function getIdEnvelope()
    {
        return $this->idEnvelope;
    }

    /**
     * Sets a new idEnvelope
     *
     * @param int $idEnvelope
     * @return self
     */
    public function setIdEnvelope($idEnvelope)
    {
        $this->idEnvelope = $idEnvelope;
        return $this;
    }


}

