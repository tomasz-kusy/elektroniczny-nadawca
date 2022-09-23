<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing UpdateProfilOutput
 */
class UpdateProfilOutput
{

    /**
     * @var \TomaszKusy\En\UpdateProfilResponse $updateProfilResponse
     */
    private $updateProfilResponse = null;

    /**
     * Gets as updateProfilResponse
     *
     * @return \TomaszKusy\En\UpdateProfilResponse
     */
    public function getUpdateProfilResponse()
    {
        return $this->updateProfilResponse;
    }

    /**
     * Sets a new updateProfilResponse
     *
     * @param \TomaszKusy\En\UpdateProfilResponse $updateProfilResponse
     * @return self
     */
    public function setUpdateProfilResponse(\TomaszKusy\En\UpdateProfilResponse $updateProfilResponse)
    {
        $this->updateProfilResponse = $updateProfilResponse;
        return $this;
    }


}

