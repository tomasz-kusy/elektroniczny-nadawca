<?php

namespace TomaszKusy\En\GetReklamacje;

/**
 * Class representing GetReklamacjeAType
 */
class GetReklamacjeAType
{

    /**
     * @var \DateTime $dataRozpatrzenia
     */
    private $dataRozpatrzenia = null;

    /**
     * Gets as dataRozpatrzenia
     *
     * @return \DateTime
     */
    public function getDataRozpatrzenia()
    {
        return $this->dataRozpatrzenia;
    }

    /**
     * Sets a new dataRozpatrzenia
     *
     * @param \DateTime $dataRozpatrzenia
     * @return self
     */
    public function setDataRozpatrzenia(\DateTime $dataRozpatrzenia)
    {
        $this->dataRozpatrzenia = $dataRozpatrzenia;
        return $this;
    }


}

