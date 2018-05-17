<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actor
 *
 * @ORM\Table(name="actor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActorRepository")
 */
class Actor
{
    /**
     * @var int
     *
     * @ORM\Column(name="actor_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $actorId;

    /**
     * @var string
     *
     * @ORM\Column(name="actor_name", type="string", length=255)
     */
    private $actorName;

    /**
     * @var string
     *
     * @ORM\Column(name="actor_firstName", type="string", length=255)
     */
    private $actorFirstName;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $actorAge;


    /**
     * Get id
     *
     * @return int
     */
    public function getActorId()
    {
        return $this->actorId;
    }

    /**
     * Set actorName
     *
     * @param string $actorName
     *
     * @return Actor
     */
    public function setActorName($actorName)
    {
        $this->actorName = $actorName;

        return $this;
    }

    /**
     * Get actorName
     *
     * @return string
     */
    public function getActorName()
    {
        return $this->actorName;
    }

    /**
     * Set actorFirstName
     *
     * @param string $actorFirstName
     *
     * @return Actor
     */
    public function setFirstName($actorFirstName)
    {
        $this->actorFirstName = $actorFirstName;

        return $this;
    }

    /**
     * Get actorFirstName
     *
     * @return string
     */
    public function getActorFirstName()
    {
        return $this->actorFirstName;
    }

    /**
     * Set actorAge
     *
     * @param int $actorAge
     *
     * @return Actor
     */
    public function setAge($actorAge)
    {
        $this->actorAge = $actorAge;

        return $this;
    }

    /**
     * Get actorAge
     *
     * @return int
     */
    public function getActorAge()
    {
        return $this->actorAge;
    }
}

