<?php

namespace TomaszKusy\En\GetJednostkaOrganizacyjna;

/**
 * Class representing GetJednostkaOrganizacyjnaAType
 */
class GetJednostkaOrganizacyjnaAType
{

    /**
     * @var \TomaszKusy\En\JednostkaOrganizacyjnaType $jednostka
     */
    private $jednostka = null;

    /**
     * Gets as jednostka
     *
     * @return \TomaszKusy\En\JednostkaOrganizacyjnaType
     */
    public function getJednostka()
    {
        return $this->jednostka;
    }

    /**
     * Sets a new jednostka
     *
     * @param \TomaszKusy\En\JednostkaOrganizacyjnaType $jednostka
     * @return self
     */
    public function setJednostka(\TomaszKusy\En\JednostkaOrganizacyjnaType $jednostka)
    {
        $this->jednostka = $jednostka;
        return $this;
    }


}

