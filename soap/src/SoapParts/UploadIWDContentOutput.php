<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing UploadIWDContentOutput
 */
class UploadIWDContentOutput
{

    /**
     * @var \TomaszKusy\En\UploadIWDContentResponse $uploadIWDContentResponse
     */
    private $uploadIWDContentResponse = null;

    /**
     * Gets as uploadIWDContentResponse
     *
     * @return \TomaszKusy\En\UploadIWDContentResponse
     */
    public function getUploadIWDContentResponse()
    {
        return $this->uploadIWDContentResponse;
    }

    /**
     * Sets a new uploadIWDContentResponse
     *
     * @param \TomaszKusy\En\UploadIWDContentResponse $uploadIWDContentResponse
     * @return self
     */
    public function setUploadIWDContentResponse(\TomaszKusy\En\UploadIWDContentResponse $uploadIWDContentResponse)
    {
        $this->uploadIWDContentResponse = $uploadIWDContentResponse;
        return $this;
    }


}

