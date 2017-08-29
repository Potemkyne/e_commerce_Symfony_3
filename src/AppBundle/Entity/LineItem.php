<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LineItem
 *
 * @ORM\Table(name="line_item")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LineItemRepository")
 */
class LineItem
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Poster", inversedBy="lineitems")
     * @ORM\JoinColumn(nullable=false)
     */
    private $poster;
    
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Order", inversedBy="lineitems")
     * @ORM\JoinColumn(nullable=false)
     */
    private $order;
    
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;


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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return LineItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return LineItem
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set poster
     *
     * @param \AppBundle\Entity\Poster $poster
     *
     * @return LineItem
     */
    public function setPoster(\AppBundle\Entity\Poster $poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return \AppBundle\Entity\Poster
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set order
     *
     * @param \AppBundle\Entity\Ordor $order
     *
     * @return LineItem
     */
    public function setOrder(\AppBundle\Entity\Ordor $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \AppBundle\Entity\Ordor
     */
    public function getOrder()
    {
        return $this->order;
    }
}
