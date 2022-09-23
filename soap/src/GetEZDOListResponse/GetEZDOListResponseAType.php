<?php

namespace TomaszKusy\En\GetEZDOListResponse;

/**
 * Class representing GetEZDOListResponseAType
 */
class GetEZDOListResponseAType
{

    /**
     * @var \TomaszKusy\En\EZDOPakietType[] $eZDOPakiet
     */
    private $eZDOPakiet = [
        
    ];

    /**
     * Adds as eZDOPakiet
     *
     * @return self
     * @param \TomaszKusy\En\EZDOPakietType $eZDOPakiet
     */
    public function addToEZDOPakiet(\TomaszKusy\En\EZDOPakietType $eZDOPakiet)
    {
        $this->eZDOPakiet[] = $eZDOPakiet;
        return $this;
    }

    /**
     * isset eZDOPakiet
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEZDOPakiet($index)
    {
        return isset($this->eZDOPakiet[$index]);
    }

    /**
     * unset eZDOPakiet
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEZDOPakiet($index)
    {
        unset($this->eZDOPakiet[$index]);
    }

    /**
     * Gets as eZDOPakiet
     *
     * @return \TomaszKusy\En\EZDOPakietType[]
     */
    public function getEZDOPakiet()
    {
        return $this->eZDOPakiet;
    }

    /**
     * Sets a new eZDOPakiet
     *
     * @param \TomaszKusy\En\EZDOPakietType[] $eZDOPakiet
     * @return self
     */
    public function setEZDOPakiet(array $eZDOPakiet)
    {
        $this->eZDOPakiet = $eZDOPakiet;
        return $this;
    }


}

