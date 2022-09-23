<?php

namespace TomaszKusy\En\UpdateEnvelopeBufor;

/**
 * Class representing UpdateEnvelopeBuforAType
 */
class UpdateEnvelopeBuforAType
{

    /**
     * @var \TomaszKusy\En\BuforType[] $bufor
     */
    private $bufor = [
        
    ];

    /**
     * Adds as bufor
     *
     * @return self
     * @param \TomaszKusy\En\BuforType $bufor
     */
    public function addToBufor(\TomaszKusy\En\BuforType $bufor)
    {
        $this->bufor[] = $bufor;
        return $this;
    }

    /**
     * isset bufor
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBufor($index)
    {
        return isset($this->bufor[$index]);
    }

    /**
     * unset bufor
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBufor($index)
    {
        unset($this->bufor[$index]);
    }

    /**
     * Gets as bufor
     *
     * @return \TomaszKusy\En\BuforType[]
     */
    public function getBufor()
    {
        return $this->bufor;
    }

    /**
     * Sets a new bufor
     *
     * @param \TomaszKusy\En\BuforType[] $bufor
     * @return self
     */
    public function setBufor(array $bufor)
    {
        $this->bufor = $bufor;
        return $this;
    }


}

