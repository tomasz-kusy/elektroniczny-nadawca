<?php

namespace TomaszKusy\En\OrderEasyReturnSolutionLabel;

/**
 * Class representing OrderEasyReturnSolutionLabelAType
 */
class OrderEasyReturnSolutionLabelAType
{

    /**
     * @var \TomaszKusy\En\AddressType $senderAddress
     */
    private $senderAddress = null;

    /**
     * @var \TomaszKusy\En\AddressType $recipientAddress
     */
    private $recipientAddress = null;

    /**
     * Shipment weight [g].
     *
     * @var int $weight
     */
    private $weight = null;

    /**
     * @var \TomaszKusy\En\CustomsDeclarationType $customsDeclaration
     */
    private $customsDeclaration = null;

    /**
     * If not set, getPrintForParcel method should
     *  be used to get label.
     *
     * @var \TomaszKusy\En\DeliveryMethodType $deliveryMethod
     */
    private $deliveryMethod = null;

    /**
     * Description.
     *  maxLength: 30
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as senderAddress
     *
     * @return \TomaszKusy\En\AddressType
     */
    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    /**
     * Sets a new senderAddress
     *
     * @param \TomaszKusy\En\AddressType $senderAddress
     * @return self
     */
    public function setSenderAddress(\TomaszKusy\En\AddressType $senderAddress)
    {
        $this->senderAddress = $senderAddress;
        return $this;
    }

    /**
     * Gets as recipientAddress
     *
     * @return \TomaszKusy\En\AddressType
     */
    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }

    /**
     * Sets a new recipientAddress
     *
     * @param \TomaszKusy\En\AddressType $recipientAddress
     * @return self
     */
    public function setRecipientAddress(\TomaszKusy\En\AddressType $recipientAddress)
    {
        $this->recipientAddress = $recipientAddress;
        return $this;
    }

    /**
     * Gets as weight
     *
     * Shipment weight [g].
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * Shipment weight [g].
     *
     * @param int $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as customsDeclaration
     *
     * @return \TomaszKusy\En\CustomsDeclarationType
     */
    public function getCustomsDeclaration()
    {
        return $this->customsDeclaration;
    }

    /**
     * Sets a new customsDeclaration
     *
     * @param \TomaszKusy\En\CustomsDeclarationType $customsDeclaration
     * @return self
     */
    public function setCustomsDeclaration(\TomaszKusy\En\CustomsDeclarationType $customsDeclaration)
    {
        $this->customsDeclaration = $customsDeclaration;
        return $this;
    }

    /**
     * Gets as deliveryMethod
     *
     * If not set, getPrintForParcel method should
     *  be used to get label.
     *
     * @return \TomaszKusy\En\DeliveryMethodType
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * Sets a new deliveryMethod
     *
     * If not set, getPrintForParcel method should
     *  be used to get label.
     *
     * @param \TomaszKusy\En\DeliveryMethodType $deliveryMethod
     * @return self
     */
    public function setDeliveryMethod(\TomaszKusy\En\DeliveryMethodType $deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description.
     *  maxLength: 30
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description.
     *  maxLength: 30
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

