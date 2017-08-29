<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table(name="movie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MovieRepository")
 */
class Movie
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
     * @ORM\OneToMany (targetEntity="AppBundle\Entity\Poster", mappedBy="movie")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $posters;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="director", type="string", length=255)
     */
    private $director;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="release_date", type="date")
     */
    private $releaseDate;


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
     * Set title
     *
     * @param string $title
     *
     * @return Movie
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set director
     *
     * @param string $director
     *
     * @return Movie
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return string
     */
    public function getDirector()
    {
        return $this->director;
    }

   

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     *
     * @return Movie
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posters = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add poster
     *
     * @param \AppBundle\Entity\Poster $poster
     *
     * @return Movie
     */
    public function addPoster(\AppBundle\Entity\Poster $poster)
    {
        $this->posters[] = $poster;

        return $this;
    }

    /**
     * Remove poster
     *
     * @param \AppBundle\Entity\Poster $poster
     */
    public function removePoster(\AppBundle\Entity\Poster $poster)
    {
        $this->posters->removeElement($poster);
    }

    /**
     * Get posters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosters()
    {
        return $this->posters;
    }
}
