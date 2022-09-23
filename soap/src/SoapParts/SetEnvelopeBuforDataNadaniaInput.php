<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing SetEnvelopeBuforDataNadaniaInput
 */
class SetEnvelopeBuforDataNadaniaInput
{

    /**
     * @var \TomaszKusy\En\SetEnvelopeBuforDataNadania $setEnvelopeBuforDataNadania
     */
    private $setEnvelopeBuforDataNadania = null;

    /**
     * Gets as setEnvelopeBuforDataNadania
     *
     * @return \TomaszKusy\En\SetEnvelopeBuforDataNadania
     */
    public function getSetEnvelopeBuforDataNadania()
    {
        return $this->setEnvelopeBuforDataNadania;
    }

    /**
     * Sets a new setEnvelopeBuforDataNadania
     *
     * @param \TomaszKusy\En\SetEnvelopeBuforDataNadania $setEnvelopeBuforDataNadania
     * @return self
     */
    public function setSetEnvelopeBuforDataNadania(\TomaszKusy\En\SetEnvelopeBuforDataNadania $setEnvelopeBuforDataNadania)
    {
        $this->setEnvelopeBuforDataNadania = $setEnvelopeBuforDataNadania;
        return $this;
    }


}

