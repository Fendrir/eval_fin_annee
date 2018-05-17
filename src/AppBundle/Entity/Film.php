<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilmRepository")
 */
class Film
{
    /**
     * @var int
     *
     * @ORM\Column(name="film_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $filmId;

    /**
     * @var string
     *
     * @ORM\Column(name="film_name", type="string", length=255)
     */
    private $filmName;

    /**
     * @var int
     *
     * @ORM\Column(name="film_year", type="integer")
     */
    private $filmYear;

    /**
     * @ORM\ManyToOne(targetEntity="Realisator", inversedBy="films")
     * @ORM\JoinColumn(name="rea_id", referencedColumnName="rea_id")
     */
    private $realisator;

    /**
     * Many Actors have Many Films.
     * @ORM\ManyToMany(targetEntity="Actor")
     * @ORM\JoinTable(name="film_actor",
     *      joinColumns={@ORM\JoinColumn(name="film_id", referencedColumnName="film_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="actor_id", referencedColumnName="actor_id")}
     *      )
     */
    private $actors;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actors = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get actors
     * 
     * @return int
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Set actors
     *
     * @param \AppBundle\Entity\Actor $actor
     *
     * @return Film
     */
    public function setActors(\AppBundle\Entity\Actor $actor)
    {
        $this->actors = $actor;

        return $this;
    }

    /**
     * Add actors
     *
     * @param \AppBundle\Entity\Actor $actor
     *
     * @return Film
     */
    public function addPassager(\AppBundle\Entity\Actor $actor)
    {
        $this->actors[] = $actor;

        return $this;
    }

    /**
     * Remove actor
     *
     * @param \AppBundle\Entity\Actor $actor
     */
    public function removePassager(\AppBundle\Entity\Actor $actor)
    {
        $this->actors->removeElement($actor);
    }

    /**
     * Get filmId
     *
     * @return int
     */
    public function getFilmId()
    {
        return $this->filmId;
    }

    /**
     * Set filmName
     *
     * @param string $filmName
     *
     * @return Film
     */
    public function setFilmName($filmName)
    {
        $this->filmName = $filmName;

        return $this;
    }

    /**
     * Get filmName
     *
     * @return string
     */
    public function getFilmName()
    {
        return $this->filmName;
    }

    /**
     * Set filmYear
     *
     * @param integer $filmYear
     *
     * @return Film
     */
    public function setFilmYear($filmYear)
    {
        $this->filmYear = $filmYear;

        return $this;
    }

    /**
     * Get filmYear
     *
     * @return int
     */
    public function getFilmYear()
    {
        return $this->filmYear;
    }

    public function __toString()
    {
        return $this->getFilmName();
    }

}
