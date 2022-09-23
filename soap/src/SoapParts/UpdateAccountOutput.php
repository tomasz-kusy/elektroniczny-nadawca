<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing UpdateAccountOutput
 */
class UpdateAccountOutput
{

    /**
     * @var \TomaszKusy\En\UpdateAccountResponse $updateAccountResponse
     */
    private $updateAccountResponse = null;

    /**
     * Gets as updateAccountResponse
     *
     * @return \TomaszKusy\En\UpdateAccountResponse
     */
    public function getUpdateAccountResponse()
    {
        return $this->updateAccountResponse;
    }

    /**
     * Sets a new updateAccountResponse
     *
     * @param \TomaszKusy\En\UpdateAccountResponse $updateAccountResponse
     * @return self
     */
    public function setUpdateAccountResponse(\TomaszKusy\En\UpdateAccountResponse $updateAccountResponse)
    {
        $this->updateAccountResponse = $updateAccountResponse;
        return $this;
    }


}

