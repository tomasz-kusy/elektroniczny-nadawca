<?php

namespace TomaszKusy\En\GetPaczkaKorzysciInfoResponse;

/**
 * Class representing GetPaczkaKorzysciInfoResponseAType
 */
class GetPaczkaKorzysciInfoResponseAType
{

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var int $idKarta
     */
    private $idKarta = null;

    /**
     * @var \TomaszKusy\En\InfoPaczkaKorzysciType $info
     */
    private $info = null;

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

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

    /**
     * Gets as idKarta
     *
     * @return int
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Sets a new idKarta
     *
     * @param int $idKarta
     * @return self
     */
    public function setIdKarta($idKarta)
    {
        $this->idKarta = $idKarta;
        return $this;
    }

    /**
     * Gets as info
     *
     * @return \TomaszKusy\En\InfoPaczkaKorzysciType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * @param \TomaszKusy\En\InfoPaczkaKorzysciType $info
     * @return self
     */
    public function setInfo(\TomaszKusy\En\InfoPaczkaKorzysciType $info)
    {
        $this->info = $info;
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

