<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing WyslijLinkaOStatusieEZwrotuInput
 */
class WyslijLinkaOStatusieEZwrotuInput
{

    /**
     * @var \TomaszKusy\En\WyslijLinkaOStatusieEZwrotu $wyslijLinkaOStatusieEZwrotu
     */
    private $wyslijLinkaOStatusieEZwrotu = null;

    /**
     * Gets as wyslijLinkaOStatusieEZwrotu
     *
     * @return \TomaszKusy\En\WyslijLinkaOStatusieEZwrotu
     */
    public function getWyslijLinkaOStatusieEZwrotu()
    {
        return $this->wyslijLinkaOStatusieEZwrotu;
    }

    /**
     * Sets a new wyslijLinkaOStatusieEZwrotu
     *
     * @param \TomaszKusy\En\WyslijLinkaOStatusieEZwrotu $wyslijLinkaOStatusieEZwrotu
     * @return self
     */
    public function setWyslijLinkaOStatusieEZwrotu(\TomaszKusy\En\WyslijLinkaOStatusieEZwrotu $wyslijLinkaOStatusieEZwrotu)
    {
        $this->wyslijLinkaOStatusieEZwrotu = $wyslijLinkaOStatusieEZwrotu;
        return $this;
    }


}

