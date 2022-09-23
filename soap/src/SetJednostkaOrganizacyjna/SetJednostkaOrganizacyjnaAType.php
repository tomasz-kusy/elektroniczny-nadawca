<?php

namespace TomaszKusy\En\SetJednostkaOrganizacyjna;

/**
 * Class representing SetJednostkaOrganizacyjnaAType
 */
class SetJednostkaOrganizacyjnaAType
{

    /**
     * @var \TomaszKusy\En\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     */
    private $jednostkaOrganizacyjna = [
        
    ];

    /**
     * Adds as jednostkaOrganizacyjna
     *
     * @return self
     * @param \TomaszKusy\En\JednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     */
    public function addToJednostkaOrganizacyjna(\TomaszKusy\En\JednostkaOrganizacyjnaType $jednostkaOrganizacyjna)
    {
        $this->jednostkaOrganizacyjna[] = $jednostkaOrganizacyjna;
        return $this;
    }

    /**
     * isset jednostkaOrganizacyjna
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJednostkaOrganizacyjna($index)
    {
        return isset($this->jednostkaOrganizacyjna[$index]);
    }

    /**
     * unset jednostkaOrganizacyjna
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJednostkaOrganizacyjna($index)
    {
        unset($this->jednostkaOrganizacyjna[$index]);
    }

    /**
     * Gets as jednostkaOrganizacyjna
     *
     * @return \TomaszKusy\En\JednostkaOrganizacyjnaType[]
     */
    public function getJednostkaOrganizacyjna()
    {
        return $this->jednostkaOrganizacyjna;
    }

    /**
     * Sets a new jednostkaOrganizacyjna
     *
     * @param \TomaszKusy\En\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     * @return self
     */
    public function setJednostkaOrganizacyjna(array $jednostkaOrganizacyjna)
    {
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
        return $this;
    }


}

