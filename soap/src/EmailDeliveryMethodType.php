<?php

namespace TomaszKusy\En;

/**
 * Class representing EmailDeliveryMethodType
 *
 *
 * XSD Type: EmailDeliveryMethodType
 */
class EmailDeliveryMethodType extends DeliveryMethodType
{

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


}

