<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing CreateProfilOutput
 */
class CreateProfilOutput
{

    /**
     * @var \TomaszKusy\En\CreateProfilResponse $createProfilResponse
     */
    private $createProfilResponse = null;

    /**
     * Gets as createProfilResponse
     *
     * @return \TomaszKusy\En\CreateProfilResponse
     */
    public function getCreateProfilResponse()
    {
        return $this->createProfilResponse;
    }

    /**
     * Sets a new createProfilResponse
     *
     * @param \TomaszKusy\En\CreateProfilResponse $createProfilResponse
     * @return self
     */
    public function setCreateProfilResponse(\TomaszKusy\En\CreateProfilResponse $createProfilResponse)
    {
        $this->createProfilResponse = $createProfilResponse;
        return $this;
    }


}

