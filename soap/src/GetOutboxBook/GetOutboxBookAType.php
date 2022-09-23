<?php

namespace TomaszKusy\En\GetOutboxBook;

/**
 * Class representing GetOutboxBookAType
 */
class GetOutboxBookAType
{

    /**
     * @var int $idEnvelope
     */
    private $idEnvelope = null;

    /**
     * @var bool $includeNierejestrowane
     */
    private $includeNierejestrowane = null;

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

    /**
     * Gets as includeNierejestrowane
     *
     * @return bool
     */
    public function getIncludeNierejestrowane()
    {
        return $this->includeNierejestrowane;
    }

    /**
     * Sets a new includeNierejestrowane
     *
     * @param bool $includeNierejestrowane
     * @return self
     */
    public function setIncludeNierejestrowane($includeNierejestrowane)
    {
        $this->includeNierejestrowane = $includeNierejestrowane;
        return $this;
    }


}

