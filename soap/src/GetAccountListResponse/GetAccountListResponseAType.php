<?php

namespace TomaszKusy\En\GetAccountListResponse;

/**
 * Class representing GetAccountListResponseAType
 */
class GetAccountListResponseAType
{

    /**
     * @var \TomaszKusy\En\AccountType[] $account
     */
    private $account = [
        
    ];

    /**
     * Adds as account
     *
     * @return self
     * @param \TomaszKusy\En\AccountType $account
     */
    public function addToAccount(\TomaszKusy\En\AccountType $account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * isset account
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * @return \TomaszKusy\En\AccountType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \TomaszKusy\En\AccountType[] $account
     * @return self
     */
    public function setAccount(array $account)
    {
        $this->account = $account;
        return $this;
    }


}

