<?php

namespace TomaszKusy\En\IsObszarMiastoResponse;

/**
 * Class representing IsObszarMiastoResponseAType
 */
class IsObszarMiastoResponseAType
{

    /**
     * @var \TomaszKusy\En\ObszarAdresowyResponseType[] $obszarAdresowy
     */
    private $obszarAdresowy = [
        
    ];

    /**
     * Adds as obszarAdresowy
     *
     * @return self
     * @param \TomaszKusy\En\ObszarAdresowyResponseType $obszarAdresowy
     */
    public function addToObszarAdresowy(\TomaszKusy\En\ObszarAdresowyResponseType $obszarAdresowy)
    {
        $this->obszarAdresowy[] = $obszarAdresowy;
        return $this;
    }

    /**
     * isset obszarAdresowy
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObszarAdresowy($index)
    {
        return isset($this->obszarAdresowy[$index]);
    }

    /**
     * unset obszarAdresowy
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObszarAdresowy($index)
    {
        unset($this->obszarAdresowy[$index]);
    }

    /**
     * Gets as obszarAdresowy
     *
     * @return \TomaszKusy\En\ObszarAdresowyResponseType[]
     */
    public function getObszarAdresowy()
    {
        return $this->obszarAdresowy;
    }

    /**
     * Sets a new obszarAdresowy
     *
     * @param \TomaszKusy\En\ObszarAdresowyResponseType[] $obszarAdresowy
     * @return self
     */
    public function setObszarAdresowy(array $obszarAdresowy)
    {
        $this->obszarAdresowy = $obszarAdresowy;
        return $this;
    }


}

