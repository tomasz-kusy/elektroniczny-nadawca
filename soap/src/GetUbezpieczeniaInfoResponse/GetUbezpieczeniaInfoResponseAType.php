<?php

namespace TomaszKusy\En\GetUbezpieczeniaInfoResponse;

/**
 * Class representing GetUbezpieczeniaInfoResponseAType
 */
class GetUbezpieczeniaInfoResponseAType
{

    /**
     * @var \TomaszKusy\En\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     */
    private $poziomyUbezpieczenia = [
        
    ];

    /**
     * Adds as poziomyUbezpieczenia
     *
     * @return self
     * @param \TomaszKusy\En\UbezpieczeniaInfoType $poziomyUbezpieczenia
     */
    public function addToPoziomyUbezpieczenia(\TomaszKusy\En\UbezpieczeniaInfoType $poziomyUbezpieczenia)
    {
        $this->poziomyUbezpieczenia[] = $poziomyUbezpieczenia;
        return $this;
    }

    /**
     * isset poziomyUbezpieczenia
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPoziomyUbezpieczenia($index)
    {
        return isset($this->poziomyUbezpieczenia[$index]);
    }

    /**
     * unset poziomyUbezpieczenia
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPoziomyUbezpieczenia($index)
    {
        unset($this->poziomyUbezpieczenia[$index]);
    }

    /**
     * Gets as poziomyUbezpieczenia
     *
     * @return \TomaszKusy\En\UbezpieczeniaInfoType[]
     */
    public function getPoziomyUbezpieczenia()
    {
        return $this->poziomyUbezpieczenia;
    }

    /**
     * Sets a new poziomyUbezpieczenia
     *
     * @param \TomaszKusy\En\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     * @return self
     */
    public function setPoziomyUbezpieczenia(array $poziomyUbezpieczenia)
    {
        $this->poziomyUbezpieczenia = $poziomyUbezpieczenia;
        return $this;
    }


}

