<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing HelloInput
 */
class HelloInput
{

    /**
     * @var \TomaszKusy\En\Hello $hello
     */
    private $hello = null;

    /**
     * Gets as hello
     *
     * @return \TomaszKusy\En\Hello
     */
    public function getHello()
    {
        return $this->hello;
    }

    /**
     * Sets a new hello
     *
     * @param \TomaszKusy\En\Hello $hello
     * @return self
     */
    public function setHello(\TomaszKusy\En\Hello $hello)
    {
        $this->hello = $hello;
        return $this;
    }


}

