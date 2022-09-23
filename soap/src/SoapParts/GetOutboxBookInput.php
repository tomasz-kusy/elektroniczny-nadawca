<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetOutboxBookInput
 */
class GetOutboxBookInput
{

    /**
     * @var \TomaszKusy\En\GetOutboxBook $getOutboxBook
     */
    private $getOutboxBook = null;

    /**
     * Gets as getOutboxBook
     *
     * @return \TomaszKusy\En\GetOutboxBook
     */
    public function getGetOutboxBook()
    {
        return $this->getOutboxBook;
    }

    /**
     * Sets a new getOutboxBook
     *
     * @param \TomaszKusy\En\GetOutboxBook $getOutboxBook
     * @return self
     */
    public function setGetOutboxBook(\TomaszKusy\En\GetOutboxBook $getOutboxBook)
    {
        $this->getOutboxBook = $getOutboxBook;
        return $this;
    }


}

