<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccountRepository")
 */
class Account
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="bilingAddress", type="string", length=255)
     */
    private $bilingAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="open", type="date")
     */
    private $open;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closed", type="date")
     */
    private $closed;

    /**
     * @var bool
     *
     * @ORM\Column(name="isClosed", type="boolean")
     */
    private $isClosed;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bilingAddress
     *
     * @param string $bilingAddress
     *
     * @return Account
     */
    public function setBilingAddress($bilingAddress)
    {
        $this->bilingAddress = $bilingAddress;

        return $this;
    }

    /**
     * Get bilingAddress
     *
     * @return string
     */
    public function getBilingAddress()
    {
        return $this->bilingAddress;
    }

    /**
     * Set open
     *
     * @param \DateTime $open
     *
     * @return Account
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get open
     *
     * @return \DateTime
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Set closed
     *
     * @param \DateTime $closed
     *
     * @return Account
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * Get closed
     *
     * @return \DateTime
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Set isClosed
     *
     * @param boolean $isClosed
     *
     * @return Account
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    /**
     * Get isClosed
     *
     * @return bool
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }
}

