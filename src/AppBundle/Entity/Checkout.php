<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Checkout
 *
 * @ORM\Table(name="checkout")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CheckoutRepository")
 */
class Checkout
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
     * @var \DateTime
     *
     * @ORM\Column(name="checkoutDate", type="datetime")
     */
    private $checkoutDate;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer")
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=255)
     */
    private $details;


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
     * Set checkoutDate
     *
     * @param \DateTime $checkoutDate
     *
     * @return Checkout
     */
    public function setCheckoutDate($checkoutDate)
    {
        $this->checkoutDate = $checkoutDate;

        return $this;
    }

    /**
     * Get checkoutDate
     *
     * @return \DateTime
     */
    public function getCheckoutDate()
    {
        return $this->checkoutDate;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Checkout
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return Checkout
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }
}
