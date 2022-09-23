<?php

namespace TomaszKusy\En\CreateAccount;

/**
 * Class representing CreateAccountAType
 */
class CreateAccountAType
{

    /**
     * @var \TomaszKusy\En\AccountType $account
     */
    private $account = null;

    /**
     * Gets as account
     *
     * @return \TomaszKusy\En\AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \TomaszKusy\En\AccountType $account
     * @return self
     */
    public function setAccount(\TomaszKusy\En\AccountType $account)
    {
        $this->account = $account;
        return $this;
    }


}

