<?php

namespace TomaszKusy\En;

/**
 * Class representing AwizacjaType
 *
 *
 * XSD Type: awizacjaType
 */
class AwizacjaType
{

    /**
     * @var \DateTime $od
     */
    private $od = null;

    /**
     * @var \DateTime $do
     */
    private $do = null;

    /**
     * Gets as od
     *
     * @return \DateTime
     */
    public function getOd()
    {
        return $this->od;
    }

    /**
     * Sets a new od
     *
     * @param \DateTime $od
     * @return self
     */
    public function setOd(\DateTime $od)
    {
        $this->od = $od;
        return $this;
    }

    /**
     * Gets as do
     *
     * @return \DateTime
     */
    public function getDo()
    {
        return $this->do;
    }

    /**
     * Sets a new do
     *
     * @param \DateTime $do
     * @return self
     */
    public function setDo(\DateTime $do)
    {
        $this->do = $do;
        return $this;
    }


}

