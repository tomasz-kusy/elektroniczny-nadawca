<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetPasswordExpiredDateOutput
 */
class GetPasswordExpiredDateOutput
{

    /**
     * @var \TomaszKusy\En\GetPasswordExpiredDateResponse $getPasswordExpiredDateResponse
     */
    private $getPasswordExpiredDateResponse = null;

    /**
     * Gets as getPasswordExpiredDateResponse
     *
     * @return \TomaszKusy\En\GetPasswordExpiredDateResponse
     */
    public function getGetPasswordExpiredDateResponse()
    {
        return $this->getPasswordExpiredDateResponse;
    }

    /**
     * Sets a new getPasswordExpiredDateResponse
     *
     * @param \TomaszKusy\En\GetPasswordExpiredDateResponse $getPasswordExpiredDateResponse
     * @return self
     */
    public function setGetPasswordExpiredDateResponse(\TomaszKusy\En\GetPasswordExpiredDateResponse $getPasswordExpiredDateResponse)
    {
        $this->getPasswordExpiredDateResponse = $getPasswordExpiredDateResponse;
        return $this;
    }


}

