<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poster
 *
 * @ORM\Table(name="poster")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PosterRepository")
 */
class Poster {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Movie", inversedBy="posters")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $movie;
    
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;

   
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\LineItem",mappedBy="poster")
     */
    private $lineitems;
   
    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="unitprice", type="string", length=255)
     */
    private $unitprice;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set size
     *
     * @param string $size
     *
     * @return Poster
     */
    public function setSize($size) {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Poster
     */
    public function setCountry($country) {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry() {
        return $this->country;
    }

    
    public function setMovie(\AppBundle\Entity\Movie $movie) {
        $this->movie = $movie;

        return $this;
    }

    /**
     * Get movie
     *
     * @return \AppBundle\Entity\Movie
     */
    public function getMovie() {
        return $this->movie;
    }


    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Poster
     */
    public function setImage(\AppBundle\Entity\Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set unitprice
     *
     * @param string $unitprice
     *
     * @return Poster
     */
    public function setUnitprice($unitprice)
    {
        $this->unitprice = $unitprice;

        return $this;
    }

    /**
     * Get unitprice
     *
     * @return string
     */
    public function getUnitprice()
    {
        return $this->unitprice;
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
     * @return Poster
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
