<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing UploadIWDContentInput
 */
class UploadIWDContentInput
{

    /**
     * @var \TomaszKusy\En\UploadIWDContent $uploadIWDContent
     */
    private $uploadIWDContent = null;

    /**
     * Gets as uploadIWDContent
     *
     * @return \TomaszKusy\En\UploadIWDContent
     */
    public function getUploadIWDContent()
    {
        return $this->uploadIWDContent;
    }

    /**
     * Sets a new uploadIWDContent
     *
     * @param \TomaszKusy\En\UploadIWDContent $uploadIWDContent
     * @return self
     */
    public function setUploadIWDContent(\TomaszKusy\En\UploadIWDContent $uploadIWDContent)
    {
        $this->uploadIWDContent = $uploadIWDContent;
        return $this;
    }


}

