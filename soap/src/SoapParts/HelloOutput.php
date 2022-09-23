<?php

namespace TomaszKusy\En\SoapParts;

/**
 * Class representing HelloOutput
 */
class HelloOutput
{

    /**
     * @var \TomaszKusy\En\HelloResponse $helloResponse
     */
    private $helloResponse = null;

    /**
     * Gets as helloResponse
     *
     * @return \TomaszKusy\En\HelloResponse
     */
    public function getHelloResponse()
    {
        return $this->helloResponse;
    }

    /**
     * Sets a new helloResponse
     *
     * @param \TomaszKusy\En\HelloResponse $helloResponse
     * @return self
     */
    public function setHelloResponse(\TomaszKusy\En\HelloResponse $helloResponse)
    {
        $this->helloResponse = $helloResponse;
        return $this;
    }


}

