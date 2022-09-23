<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing GetPlacowkiPocztoweInput
 */
class GetPlacowkiPocztoweInput
{

    /**
     * @var \TomaszKusy\En\GetPlacowkiPocztowe $getPlacowkiPocztowe
     */
    private $getPlacowkiPocztowe = null;

    /**
     * Gets as getPlacowkiPocztowe
     *
     * @return \TomaszKusy\En\GetPlacowkiPocztowe
     */
    public function getGetPlacowkiPocztowe()
    {
        return $this->getPlacowkiPocztowe;
    }

    /**
     * Sets a new getPlacowkiPocztowe
     *
     * @param \TomaszKusy\En\GetPlacowkiPocztowe $getPlacowkiPocztowe
     * @return self
     */
    public function setGetPlacowkiPocztowe(\TomaszKusy\En\GetPlacowkiPocztowe $getPlacowkiPocztowe)
    {
        $this->getPlacowkiPocztowe = $getPlacowkiPocztowe;
        return $this;
    }


}

