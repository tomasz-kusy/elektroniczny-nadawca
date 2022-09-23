<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetFirmowaPocztaBookInput
 */
class GetFirmowaPocztaBookInput
{

    /**
     * @var \TomaszKusy\En\GetFirmowaPocztaBook $getFirmowaPocztaBook
     */
    private $getFirmowaPocztaBook = null;

    /**
     * Gets as getFirmowaPocztaBook
     *
     * @return \TomaszKusy\En\GetFirmowaPocztaBook
     */
    public function getGetFirmowaPocztaBook()
    {
        return $this->getFirmowaPocztaBook;
    }

    /**
     * Sets a new getFirmowaPocztaBook
     *
     * @param \TomaszKusy\En\GetFirmowaPocztaBook $getFirmowaPocztaBook
     * @return self
     */
    public function setGetFirmowaPocztaBook(\TomaszKusy\En\GetFirmowaPocztaBook $getFirmowaPocztaBook)
    {
        $this->getFirmowaPocztaBook = $getFirmowaPocztaBook;
        return $this;
    }


}

