<?php

namespace TomaszKusy\En\GetLibrariesForLegalDepositsResponse;

/**
 * Class representing GetLibrariesForLegalDepositsResponseAType
 */
class GetLibrariesForLegalDepositsResponseAType
{

    /**
     * @var \TomaszKusy\En\LibraryForLegalDepositType[] $libraryForLegalDeposit
     */
    private $libraryForLegalDeposit = [
        
    ];

    /**
     * Adds as libraryForLegalDeposit
     *
     * @return self
     * @param \TomaszKusy\En\LibraryForLegalDepositType $libraryForLegalDeposit
     */
    public function addToLibraryForLegalDeposit(\TomaszKusy\En\LibraryForLegalDepositType $libraryForLegalDeposit)
    {
        $this->libraryForLegalDeposit[] = $libraryForLegalDeposit;
        return $this;
    }

    /**
     * isset libraryForLegalDeposit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLibraryForLegalDeposit($index)
    {
        return isset($this->libraryForLegalDeposit[$index]);
    }

    /**
     * unset libraryForLegalDeposit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLibraryForLegalDeposit($index)
    {
        unset($this->libraryForLegalDeposit[$index]);
    }

    /**
     * Gets as libraryForLegalDeposit
     *
     * @return \TomaszKusy\En\LibraryForLegalDepositType[]
     */
    public function getLibraryForLegalDeposit()
    {
        return $this->libraryForLegalDeposit;
    }

    /**
     * Sets a new libraryForLegalDeposit
     *
     * @param \TomaszKusy\En\LibraryForLegalDepositType[] $libraryForLegalDeposit
     * @return self
     */
    public function setLibraryForLegalDeposit(array $libraryForLegalDeposit)
    {
        $this->libraryForLegalDeposit = $libraryForLegalDeposit;
        return $this;
    }


}

