<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing DownloadIWDContentInput
 */
class DownloadIWDContentInput
{

    /**
     * @var \TomaszKusy\En\DownloadIWDContent $downloadIWDContent
     */
    private $downloadIWDContent = null;

    /**
     * Gets as downloadIWDContent
     *
     * @return \TomaszKusy\En\DownloadIWDContent
     */
    public function getDownloadIWDContent()
    {
        return $this->downloadIWDContent;
    }

    /**
     * Sets a new downloadIWDContent
     *
     * @param \TomaszKusy\En\DownloadIWDContent $downloadIWDContent
     * @return self
     */
    public function setDownloadIWDContent(\TomaszKusy\En\DownloadIWDContent $downloadIWDContent)
    {
        $this->downloadIWDContent = $downloadIWDContent;
        return $this;
    }


}

