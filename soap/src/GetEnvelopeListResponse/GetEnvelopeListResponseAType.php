<?php

namespace TomaszKusy\En\GetEnvelopeListResponse;

/**
 * Class representing GetEnvelopeListResponseAType
 */
class GetEnvelopeListResponseAType
{

    /**
     * @var \TomaszKusy\En\EnvelopeInfoType[] $envelopes
     */
    private $envelopes = [
        
    ];

    /**
     * Adds as envelopes
     *
     * @return self
     * @param \TomaszKusy\En\EnvelopeInfoType $envelopes
     */
    public function addToEnvelopes(\TomaszKusy\En\EnvelopeInfoType $envelopes)
    {
        $this->envelopes[] = $envelopes;
        return $this;
    }

    /**
     * isset envelopes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnvelopes($index)
    {
        return isset($this->envelopes[$index]);
    }

    /**
     * unset envelopes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnvelopes($index)
    {
        unset($this->envelopes[$index]);
    }

    /**
     * Gets as envelopes
     *
     * @return \TomaszKusy\En\EnvelopeInfoType[]
     */
    public function getEnvelopes()
    {
        return $this->envelopes;
    }

    /**
     * Sets a new envelopes
     *
     * @param \TomaszKusy\En\EnvelopeInfoType[] $envelopes
     * @return self
     */
    public function setEnvelopes(array $envelopes)
    {
        $this->envelopes = $envelopes;
        return $this;
    }


}

