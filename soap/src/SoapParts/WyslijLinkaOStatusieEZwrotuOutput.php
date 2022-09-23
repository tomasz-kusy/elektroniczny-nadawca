<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing WyslijLinkaOStatusieEZwrotuOutput
 */
class WyslijLinkaOStatusieEZwrotuOutput
{

    /**
     * @var \TomaszKusy\En\WyslijLinkaOStatusieEZwrotuResponse $wyslijLinkaOStatusieEZwrotuResponse
     */
    private $wyslijLinkaOStatusieEZwrotuResponse = null;

    /**
     * Gets as wyslijLinkaOStatusieEZwrotuResponse
     *
     * @return \TomaszKusy\En\WyslijLinkaOStatusieEZwrotuResponse
     */
    public function getWyslijLinkaOStatusieEZwrotuResponse()
    {
        return $this->wyslijLinkaOStatusieEZwrotuResponse;
    }

    /**
     * Sets a new wyslijLinkaOStatusieEZwrotuResponse
     *
     * @param \TomaszKusy\En\WyslijLinkaOStatusieEZwrotuResponse $wyslijLinkaOStatusieEZwrotuResponse
     * @return self
     */
    public function setWyslijLinkaOStatusieEZwrotuResponse(\TomaszKusy\En\WyslijLinkaOStatusieEZwrotuResponse $wyslijLinkaOStatusieEZwrotuResponse)
    {
        $this->wyslijLinkaOStatusieEZwrotuResponse = $wyslijLinkaOStatusieEZwrotuResponse;
        return $this;
    }


}

