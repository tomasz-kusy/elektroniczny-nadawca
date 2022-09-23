<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetOutboxBookOutput
 */
class GetOutboxBookOutput
{

    /**
     * @var \TomaszKusy\En\GetOutboxBookResponse $getOutboxBookResponse
     */
    private $getOutboxBookResponse = null;

    /**
     * Gets as getOutboxBookResponse
     *
     * @return \TomaszKusy\En\GetOutboxBookResponse
     */
    public function getGetOutboxBookResponse()
    {
        return $this->getOutboxBookResponse;
    }

    /**
     * Sets a new getOutboxBookResponse
     *
     * @param \TomaszKusy\En\GetOutboxBookResponse $getOutboxBookResponse
     * @return self
     */
    public function setGetOutboxBookResponse(\TomaszKusy\En\GetOutboxBookResponse $getOutboxBookResponse)
    {
        $this->getOutboxBookResponse = $getOutboxBookResponse;
        return $this;
    }


}

