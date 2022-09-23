<?php

namespace TomaszKusy\En\GetKierunkiResponse;

/**
 * Class representing GetKierunkiResponseAType
 */
class GetKierunkiResponseAType
{

    /**
     * @var \TomaszKusy\En\KierunekType[] $kierunek
     */
    private $kierunek = [
        
    ];

    /**
     * @var \TomaszKusy\En\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as kierunek
     *
     * @return self
     * @param \TomaszKusy\En\KierunekType $kierunek
     */
    public function addToKierunek(\TomaszKusy\En\KierunekType $kierunek)
    {
        $this->kierunek[] = $kierunek;
        return $this;
    }

    /**
     * isset kierunek
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKierunek($index)
    {
        return isset($this->kierunek[$index]);
    }

    /**
     * unset kierunek
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKierunek($index)
    {
        unset($this->kierunek[$index]);
    }

    /**
     * Gets as kierunek
     *
     * @return \TomaszKusy\En\KierunekType[]
     */
    public function getKierunek()
    {
        return $this->kierunek;
    }

    /**
     * Sets a new kierunek
     *
     * @param \TomaszKusy\En\KierunekType[] $kierunek
     * @return self
     */
    public function setKierunek(array $kierunek)
    {
        $this->kierunek = $kierunek;
        return $this;
    }

    /**
     * Adds as error
     *
     * @return self
     * @param \TomaszKusy\En\ErrorType $error
     */
    public function addToError(\TomaszKusy\En\ErrorType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return \TomaszKusy\En\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \TomaszKusy\En\ErrorType[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }


}

