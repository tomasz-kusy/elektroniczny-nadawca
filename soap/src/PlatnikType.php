<?php

namespace TomaszKusy\En;

/**
 * Class representing PlatnikType
 *
 *
 * XSD Type: platnikType
 */
class PlatnikType
{

    /**
     * @var string $uiszczaOplate
     */
    private $uiszczaOplate = null;

    /**
     * @var \TomaszKusy\En\AdresType $adresPlatnika
     */
    private $adresPlatnika = null;

    /**
     * Gets as uiszczaOplate
     *
     * @return string
     */
    public function getUiszczaOplate()
    {
        return $this->uiszczaOplate;
    }

    /**
     * Sets a new uiszczaOplate
     *
     * @param string $uiszczaOplate
     * @return self
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
        $this->uiszczaOplate = $uiszczaOplate;
        return $this;
    }

    /**
     * Gets as adresPlatnika
     *
     * @return \TomaszKusy\En\AdresType
     */
    public function getAdresPlatnika()
    {
        return $this->adresPlatnika;
    }

    /**
     * Sets a new adresPlatnika
     *
     * @param \TomaszKusy\En\AdresType $adresPlatnika
     * @return self
     */
    public function setAdresPlatnika(\TomaszKusy\En\AdresType $adresPlatnika)
    {
        $this->adresPlatnika = $adresPlatnika;
        return $this;
    }


}

