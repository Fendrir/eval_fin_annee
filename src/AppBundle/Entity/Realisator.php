<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Realisator
 *
 * @ORM\Table(name="realisator")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RealisatorRepository")
 */
class Realisator
{
    /**
     * @var int
     *
     * @ORM\Column(name="rea_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $reaId;

    /**
     * @var string
     *
     * @ORM\Column(name="rea_name", type="string", length=255)
     */
    private $reaName;

    /**
     * @var string
     *
     * @ORM\Column(name="rea_firstname", type="string", length=255)
     */
    private $reaFirstName;

    /**
     * @ORM\OneToMany(targetEntity="Film", mappedBy="realisator")
     */
    private $films;

    public function __construct()
    {
        $this->films = new ArrayCollection();
    }


    /**
     * Get reaId
     *
     * @return int
     */
    public function getReaId()
    {
        return $this->reaId;
    }

    /**
     * Set reaName
     *
     * @param string $reaName
     *
     * @return Realisator
     */
    public function setReaName($reaName)
    {
        $this->reaName = $reaName;

        return $this;
    }

    /**
     * Get reaName
     *
     * @return string
     */
    public function getReaName()
    {
        return $this->reaName;
    }

    /**
     * Set reaFirstname
     *
     * @param string $reaFirstname
     *
     * @return Realisator
     */
    public function setReaFirstname($reaFirstName)
    {
        $this->reaFirstName = $reaFirstName;

        return $this;
    }

    /**
     * Get reaFirstname
     *
     * @return string
     */
    public function getReaFirstname()
    {
        return $this->reaFirstName;
    }

    public function __toString()
    {
        return $this->getReaName().$this->getReaFirstName();
    }
}
