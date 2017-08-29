<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdorRepository")
 */
class Order
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
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\LineItem",mappedBy="order")
     */
    private $lineitems;
    
    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ordered", type="date")
     */
    private $ordered;

    /**
     * @var bool
     *
     * @ORM\Column(name="shipped", type="boolean")
     */
    private $shipped;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;


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
     * Set number
     *
     * @param integer $number
     *
     * @return Ordor
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set ordered
     *
     * @param \DateTime $ordered
     *
     * @return Ordor
     */
    public function setOrdered($ordered)
    {
        $this->ordered = $ordered;

        return $this;
    }

    /**
     * Get ordered
     *
     * @return \DateTime
     */
    public function getOrdered()
    {
        return $this->ordered;
    }

    /**
     * Set shipped
     *
     * @param boolean $shipped
     *
     * @return Ordor
     */
    public function setShipped($shipped)
    {
        $this->shipped = $shipped;

        return $this;
    }

    /**
     * Get shipped
     *
     * @return bool
     */
    public function getShipped()
    {
        return $this->shipped;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Ordor
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lineitems = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lineitem
     *
     * @param \AppBundle\Entity\LineItem $lineitem
     *
     * @return Ordor
     */
    public function addLineitem(\AppBundle\Entity\LineItem $lineitem)
    {
        $this->lineitems[] = $lineitem;

        return $this;
    }

    /**
     * Remove lineitem
     *
     * @param \AppBundle\Entity\LineItem $lineitem
     */
    public function removeLineitem(\AppBundle\Entity\LineItem $lineitem)
    {
        $this->lineitems->removeElement($lineitem);
    }

    /**
     * Get lineitems
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLineitems()
    {
        return $this->lineitems;
    }
}
