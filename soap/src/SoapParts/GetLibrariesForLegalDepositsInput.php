<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetLibrariesForLegalDepositsInput
 */
class GetLibrariesForLegalDepositsInput
{

    /**
     * @var \TomaszKusy\En\GetLibrariesForLegalDeposits $getLibrariesForLegalDeposits
     */
    private $getLibrariesForLegalDeposits = null;

    /**
     * Gets as getLibrariesForLegalDeposits
     *
     * @return \TomaszKusy\En\GetLibrariesForLegalDeposits
     */
    public function getGetLibrariesForLegalDeposits()
    {
        return $this->getLibrariesForLegalDeposits;
    }

    /**
     * Sets a new getLibrariesForLegalDeposits
     *
     * @param \TomaszKusy\En\GetLibrariesForLegalDeposits $getLibrariesForLegalDeposits
     * @return self
     */
    public function setGetLibrariesForLegalDeposits(\TomaszKusy\En\GetLibrariesForLegalDeposits $getLibrariesForLegalDeposits)
    {
        $this->getLibrariesForLegalDeposits = $getLibrariesForLegalDeposits;
        return $this;
    }


}

