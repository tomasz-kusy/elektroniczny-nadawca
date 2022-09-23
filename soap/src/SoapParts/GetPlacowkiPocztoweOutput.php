<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetPlacowkiPocztoweOutput
 */
class GetPlacowkiPocztoweOutput
{

    /**
     * @var \TomaszKusy\En\GetPlacowkiPocztoweResponse $getPlacowkiPocztoweResponse
     */
    private $getPlacowkiPocztoweResponse = null;

    /**
     * Gets as getPlacowkiPocztoweResponse
     *
     * @return \TomaszKusy\En\GetPlacowkiPocztoweResponse
     */
    public function getGetPlacowkiPocztoweResponse()
    {
        return $this->getPlacowkiPocztoweResponse;
    }

    /**
     * Sets a new getPlacowkiPocztoweResponse
     *
     * @param \TomaszKusy\En\GetPlacowkiPocztoweResponse $getPlacowkiPocztoweResponse
     * @return self
     */
    public function setGetPlacowkiPocztoweResponse(\TomaszKusy\En\GetPlacowkiPocztoweResponse $getPlacowkiPocztoweResponse)
    {
        $this->getPlacowkiPocztoweResponse = $getPlacowkiPocztoweResponse;
        return $this;
    }


}

