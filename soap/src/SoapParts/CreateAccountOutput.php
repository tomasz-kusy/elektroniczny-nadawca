<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing CreateAccountOutput
 */
class CreateAccountOutput
{

    /**
     * @var \TomaszKusy\En\CreateAccountResponse $createAccountResponse
     */
    private $createAccountResponse = null;

    /**
     * Gets as createAccountResponse
     *
     * @return \TomaszKusy\En\CreateAccountResponse
     */
    public function getCreateAccountResponse()
    {
        return $this->createAccountResponse;
    }

    /**
     * Sets a new createAccountResponse
     *
     * @param \TomaszKusy\En\CreateAccountResponse $createAccountResponse
     * @return self
     */
    public function setCreateAccountResponse(\TomaszKusy\En\CreateAccountResponse $createAccountResponse)
    {
        $this->createAccountResponse = $createAccountResponse;
        return $this;
    }


}

