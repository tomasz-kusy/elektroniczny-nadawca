<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing CreateAccountInput
 */
class CreateAccountInput
{

    /**
     * @var \TomaszKusy\En\CreateAccount $createAccount
     */
    private $createAccount = null;

    /**
     * Gets as createAccount
     *
     * @return \TomaszKusy\En\CreateAccount
     */
    public function getCreateAccount()
    {
        return $this->createAccount;
    }

    /**
     * Sets a new createAccount
     *
     * @param \TomaszKusy\En\CreateAccount $createAccount
     * @return self
     */
    public function setCreateAccount(\TomaszKusy\En\CreateAccount $createAccount)
    {
        $this->createAccount = $createAccount;
        return $this;
    }


}

