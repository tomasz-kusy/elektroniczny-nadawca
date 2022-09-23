<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetLibrariesForLegalDepositsOutput
 */
class GetLibrariesForLegalDepositsOutput
{

    /**
     * @var \TomaszKusy\En\GetLibrariesForLegalDepositsResponse $getLibrariesForLegalDepositsResponse
     */
    private $getLibrariesForLegalDepositsResponse = null;

    /**
     * Gets as getLibrariesForLegalDepositsResponse
     *
     * @return \TomaszKusy\En\GetLibrariesForLegalDepositsResponse
     */
    public function getGetLibrariesForLegalDepositsResponse()
    {
        return $this->getLibrariesForLegalDepositsResponse;
    }

    /**
     * Sets a new getLibrariesForLegalDepositsResponse
     *
     * @param \TomaszKusy\En\GetLibrariesForLegalDepositsResponse $getLibrariesForLegalDepositsResponse
     * @return self
     */
    public function setGetLibrariesForLegalDepositsResponse(\TomaszKusy\En\GetLibrariesForLegalDepositsResponse $getLibrariesForLegalDepositsResponse)
    {
        $this->getLibrariesForLegalDepositsResponse = $getLibrariesForLegalDepositsResponse;
        return $this;
    }


}

