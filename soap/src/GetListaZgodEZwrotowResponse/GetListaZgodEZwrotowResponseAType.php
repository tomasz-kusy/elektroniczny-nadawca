<?php

namespace TomaszKusy\En\GetListaZgodEZwrotowResponse;

/**
 * Class representing GetListaZgodEZwrotowResponseAType
 */
class GetListaZgodEZwrotowResponseAType
{

    /**
     * @var \TomaszKusy\En\OczekujeNaZgodeEZwrotType[] $lista
     */
    private $lista = [
        
    ];

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as lista
     *
     * @return self
     * @param \TomaszKusy\En\OczekujeNaZgodeEZwrotType $lista
     */
    public function addToLista(\TomaszKusy\En\OczekujeNaZgodeEZwrotType $lista)
    {
        $this->lista[] = $lista;
        return $this;
    }

    /**
     * isset lista
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLista($index)
    {
        return isset($this->lista[$index]);
    }

    /**
     * unset lista
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLista($index)
    {
        unset($this->lista[$index]);
    }

    /**
     * Gets as lista
     *
     * @return \TomaszKusy\En\OczekujeNaZgodeEZwrotType[]
     */
    public function getLista()
    {
        return $this->lista;
    }

    /**
     * Sets a new lista
     *
     * @param \TomaszKusy\En\OczekujeNaZgodeEZwrotType[] $lista
     * @return self
     */
    public function setLista(array $lista)
    {
        $this->lista = $lista;
        return $this;
    }

    /**
     * Adds as error
     *
     * @return self
     * @param \TomaszKusy\En\ErrorType $error
     */
    public function addToError(\TomaszKusy\En\ErrorType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return \TomaszKusy\En\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \TomaszKusy\En\ErrorType[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }


}

