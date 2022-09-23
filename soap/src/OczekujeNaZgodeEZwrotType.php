<?php

namespace TomaszKusy\En;

/**
 * Class representing OczekujeNaZgodeEZwrotType
 *
 *
 * XSD Type: oczekujeNaZgodeEZwrotType
 */
class OczekujeNaZgodeEZwrotType
{

    /**
     * @var int $idZgody
     */
    private $idZgody = null;

    /**
     * @var string $nazwaProduktu
     */
    private $nazwaProduktu = null;

    /**
     * @var string $numerZamowienia
     */
    private $numerZamowienia = null;

    /**
     * @var string $numerNadania
     */
    private $numerNadania = null;

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * @var \DateTime $dataNadania
     */
    private $dataNadania = null;

    /**
     * @var string $guidZgodaEZwrot
     */
    private $guidZgodaEZwrot = null;

    /**
     * @var \TomaszKusy\En\ShopEZwrotyType $sklepEZwrot
     */
    private $sklepEZwrot = null;

    /**
     * Gets as idZgody
     *
     * @return int
     */
    public function getIdZgody()
    {
        return $this->idZgody;
    }

    /**
     * Sets a new idZgody
     *
     * @param int $idZgody
     * @return self
     */
    public function setIdZgody($idZgody)
    {
        $this->idZgody = $idZgody;
        return $this;
    }

    /**
     * Gets as nazwaProduktu
     *
     * @return string
     */
    public function getNazwaProduktu()
    {
        return $this->nazwaProduktu;
    }

    /**
     * Sets a new nazwaProduktu
     *
     * @param string $nazwaProduktu
     * @return self
     */
    public function setNazwaProduktu($nazwaProduktu)
    {
        $this->nazwaProduktu = $nazwaProduktu;
        return $this;
    }

    /**
     * Gets as numerZamowienia
     *
     * @return string
     */
    public function getNumerZamowienia()
    {
        return $this->numerZamowienia;
    }

    /**
     * Sets a new numerZamowienia
     *
     * @param string $numerZamowienia
     * @return self
     */
    public function setNumerZamowienia($numerZamowienia)
    {
        $this->numerZamowienia = $numerZamowienia;
        return $this;
    }

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;
        return $this;
    }

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

    /**
     * Gets as dataNadania
     *
     * @return \DateTime
     */
    public function getDataNadania()
    {
        return $this->dataNadania;
    }

    /**
     * Sets a new dataNadania
     *
     * @param \DateTime $dataNadania
     * @return self
     */
    public function setDataNadania(\DateTime $dataNadania)
    {
        $this->dataNadania = $dataNadania;
        return $this;
    }

    /**
     * Gets as guidZgodaEZwrot
     *
     * @return string
     */
    public function getGuidZgodaEZwrot()
    {
        return $this->guidZgodaEZwrot;
    }

    /**
     * Sets a new guidZgodaEZwrot
     *
     * @param string $guidZgodaEZwrot
     * @return self
     */
    public function setGuidZgodaEZwrot($guidZgodaEZwrot)
    {
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;
        return $this;
    }

    /**
     * Gets as sklepEZwrot
     *
     * @return \TomaszKusy\En\ShopEZwrotyType
     */
    public function getSklepEZwrot()
    {
        return $this->sklepEZwrot;
    }

    /**
     * Sets a new sklepEZwrot
     *
     * @param \TomaszKusy\En\ShopEZwrotyType $sklepEZwrot
     * @return self
     */
    public function setSklepEZwrot(\TomaszKusy\En\ShopEZwrotyType $sklepEZwrot)
    {
        $this->sklepEZwrot = $sklepEZwrot;
        return $this;
    }


}

