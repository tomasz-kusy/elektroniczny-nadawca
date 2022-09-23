<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing ChangePasswordInput
 */
class ChangePasswordInput
{

    /**
     * @var \TomaszKusy\En\ChangePassword $changePassword
     */
    private $changePassword = null;

    /**
     * Gets as changePassword
     *
     * @return \TomaszKusy\En\ChangePassword
     */
    public function getChangePassword()
    {
        return $this->changePassword;
    }

    /**
     * Sets a new changePassword
     *
     * @param \TomaszKusy\En\ChangePassword $changePassword
     * @return self
     */
    public function setChangePassword(\TomaszKusy\En\ChangePassword $changePassword)
    {
        $this->changePassword = $changePassword;
        return $this;
    }


}

