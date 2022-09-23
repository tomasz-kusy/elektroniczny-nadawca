<?php

namespace TomaszKusy\En\SetJednostkaOrganizacyjnaResponse;

/**
 * Class representing SetJednostkaOrganizacyjnaResponseAType
 */
class SetJednostkaOrganizacyjnaResponseAType
{

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * @var \TomaszKusy\En\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     */
    private $jednostkaOrganizacyjna = [
        
    ];

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

    /**
     * Adds as jednostkaOrganizacyjna
     *
     * @return self
     * @param \TomaszKusy\En\JednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     */
    public function addToJednostkaOrganizacyjna(\TomaszKusy\En\JednostkaOrganizacyjnaType $jednostkaOrganizacyjna)
    {
        $this->jednostkaOrganizacyjna[] = $jednostkaOrganizacyjna;
        return $this;
    }

    /**
     * isset jednostkaOrganizacyjna
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJednostkaOrganizacyjna($index)
    {
        return isset($this->jednostkaOrganizacyjna[$index]);
    }

    /**
     * unset jednostkaOrganizacyjna
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJednostkaOrganizacyjna($index)
    {
        unset($this->jednostkaOrganizacyjna[$index]);
    }

    /**
     * Gets as jednostkaOrganizacyjna
     *
     * @return \TomaszKusy\En\JednostkaOrganizacyjnaType[]
     */
    public function getJednostkaOrganizacyjna()
    {
        return $this->jednostkaOrganizacyjna;
    }

    /**
     * Sets a new jednostkaOrganizacyjna
     *
     * @param \TomaszKusy\En\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     * @return self
     */
    public function setJednostkaOrganizacyjna(array $jednostkaOrganizacyjna)
    {
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
        return $this;
    }


}

