<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing UpdateAccountInput
 */
class UpdateAccountInput
{

    /**
     * @var \TomaszKusy\En\UpdateAccount $updateAccount
     */
    private $updateAccount = null;

    /**
     * Gets as updateAccount
     *
     * @return \TomaszKusy\En\UpdateAccount
     */
    public function getUpdateAccount()
    {
        return $this->updateAccount;
    }

    /**
     * Sets a new updateAccount
     *
     * @param \TomaszKusy\En\UpdateAccount $updateAccount
     * @return self
     */
    public function setUpdateAccount(\TomaszKusy\En\UpdateAccount $updateAccount)
    {
        $this->updateAccount = $updateAccount;
        return $this;
    }


}

