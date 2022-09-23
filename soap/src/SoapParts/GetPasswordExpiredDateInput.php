<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetPasswordExpiredDateInput
 */
class GetPasswordExpiredDateInput
{

    /**
     * @var \TomaszKusy\En\GetPasswordExpiredDate $getPasswordExpiredDate
     */
    private $getPasswordExpiredDate = null;

    /**
     * Gets as getPasswordExpiredDate
     *
     * @return \TomaszKusy\En\GetPasswordExpiredDate
     */
    public function getGetPasswordExpiredDate()
    {
        return $this->getPasswordExpiredDate;
    }

    /**
     * Sets a new getPasswordExpiredDate
     *
     * @param \TomaszKusy\En\GetPasswordExpiredDate $getPasswordExpiredDate
     * @return self
     */
    public function setGetPasswordExpiredDate(\TomaszKusy\En\GetPasswordExpiredDate $getPasswordExpiredDate)
    {
        $this->getPasswordExpiredDate = $getPasswordExpiredDate;
        return $this;
    }


}

