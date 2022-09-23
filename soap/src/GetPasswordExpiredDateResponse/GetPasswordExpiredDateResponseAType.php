<?php

namespace TomaszKusy\En\GetPasswordExpiredDateResponse;

/**
 * Class representing GetPasswordExpiredDateResponseAType
 */
class GetPasswordExpiredDateResponseAType
{

    /**
     * @var \DateTime $dataWygasniecia
     */
    private $dataWygasniecia = null;

    /**
     * Gets as dataWygasniecia
     *
     * @return \DateTime
     */
    public function getDataWygasniecia()
    {
        return $this->dataWygasniecia;
    }

    /**
     * Sets a new dataWygasniecia
     *
     * @param \DateTime $dataWygasniecia
     * @return self
     */
    public function setDataWygasniecia(\DateTime $dataWygasniecia)
    {
        $this->dataWygasniecia = $dataWygasniecia;
        return $this;
    }


}

