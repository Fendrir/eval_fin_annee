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
}

