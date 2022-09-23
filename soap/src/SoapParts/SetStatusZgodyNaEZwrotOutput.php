<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing SetStatusZgodyNaEZwrotOutput
 */
class SetStatusZgodyNaEZwrotOutput
{

    /**
     * @var \TomaszKusy\En\SetStatusZgodyNaEZwrotResponse $setStatusZgodyNaEZwrotResponse
     */
    private $setStatusZgodyNaEZwrotResponse = null;

    /**
     * Gets as setStatusZgodyNaEZwrotResponse
     *
     * @return \TomaszKusy\En\SetStatusZgodyNaEZwrotResponse
     */
    public function getSetStatusZgodyNaEZwrotResponse()
    {
        return $this->setStatusZgodyNaEZwrotResponse;
    }

    /**
     * Sets a new setStatusZgodyNaEZwrotResponse
     *
     * @param \TomaszKusy\En\SetStatusZgodyNaEZwrotResponse $setStatusZgodyNaEZwrotResponse
     * @return self
     */
    public function setSetStatusZgodyNaEZwrotResponse(\TomaszKusy\En\SetStatusZgodyNaEZwrotResponse $setStatusZgodyNaEZwrotResponse)
    {
        $this->setStatusZgodyNaEZwrotResponse = $setStatusZgodyNaEZwrotResponse;
        return $this;
    }


}

