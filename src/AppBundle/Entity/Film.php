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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="filmName", type="string", length=255)
     */
    private $filmName;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;


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
     * Set year
     *
     * @param integer $year
     *
     * @return Film
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }
}

