<?php

namespace TomaszKusy\En\SetStatusZgodyNaEZwrot;

/**
 * Class representing SetStatusZgodyNaEZwrotAType
 */
class SetStatusZgodyNaEZwrotAType
{

    /**
     * @var \TomaszKusy\En\StatusZgodyEZwrotType[] $statusZgody
     */
    private $statusZgody = [
        
    ];

    /**
     * Adds as statusZgody
     *
     * @return self
     * @param \TomaszKusy\En\StatusZgodyEZwrotType $statusZgody
     */
    public function addToStatusZgody(\TomaszKusy\En\StatusZgodyEZwrotType $statusZgody)
    {
        $this->statusZgody[] = $statusZgody;
        return $this;
    }

    /**
     * isset statusZgody
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusZgody($index)
    {
        return isset($this->statusZgody[$index]);
    }

    /**
     * unset statusZgody
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusZgody($index)
    {
        unset($this->statusZgody[$index]);
    }

    /**
     * Gets as statusZgody
     *
     * @return \TomaszKusy\En\StatusZgodyEZwrotType[]
     */
    public function getStatusZgody()
    {
        return $this->statusZgody;
    }

    /**
     * Sets a new statusZgody
     *
     * @param \TomaszKusy\En\StatusZgodyEZwrotType[] $statusZgody
     * @return self
     */
    public function setStatusZgody(array $statusZgody)
    {
        $this->statusZgody = $statusZgody;
        return $this;
    }


}

