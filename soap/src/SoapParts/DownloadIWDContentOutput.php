<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing DownloadIWDContentOutput
 */
class DownloadIWDContentOutput
{

    /**
     * @var \TomaszKusy\En\DownloadIWDContentResponse $downloadIWDContentResponse
     */
    private $downloadIWDContentResponse = null;

    /**
     * Gets as downloadIWDContentResponse
     *
     * @return \TomaszKusy\En\DownloadIWDContentResponse
     */
    public function getDownloadIWDContentResponse()
    {
        return $this->downloadIWDContentResponse;
    }

    /**
     * Sets a new downloadIWDContentResponse
     *
     * @param \TomaszKusy\En\DownloadIWDContentResponse $downloadIWDContentResponse
     * @return self
     */
    public function setDownloadIWDContentResponse(\TomaszKusy\En\DownloadIWDContentResponse $downloadIWDContentResponse)
    {
        $this->downloadIWDContentResponse = $downloadIWDContentResponse;
        return $this;
    }


}

