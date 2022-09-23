<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing ChangePasswordOutput
 */
class ChangePasswordOutput
{

    /**
     * @var \TomaszKusy\En\ChangePasswordResponse $changePasswordResponse
     */
    private $changePasswordResponse = null;

    /**
     * Gets as changePasswordResponse
     *
     * @return \TomaszKusy\En\ChangePasswordResponse
     */
    public function getChangePasswordResponse()
    {
        return $this->changePasswordResponse;
    }

    /**
     * Sets a new changePasswordResponse
     *
     * @param \TomaszKusy\En\ChangePasswordResponse $changePasswordResponse
     * @return self
     */
    public function setChangePasswordResponse(\TomaszKusy\En\ChangePasswordResponse $changePasswordResponse)
    {
        $this->changePasswordResponse = $changePasswordResponse;
        return $this;
    }


}

