<?php

namespace TomaszKusy\En\GetListaZgodEZwrotow;

/**
 * Class representing GetListaZgodEZwrotowAType
 */
class GetListaZgodEZwrotowAType
{

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


}

