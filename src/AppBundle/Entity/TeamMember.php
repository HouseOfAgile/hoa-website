<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamMember
 * @ORM\Entity
 * @ORM\Table(name="team_member")
 */
class TeamMember
{
    use ORMBehaviors\Translatable\Translatable;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(length=70, nullable=true)
     */
    private $fullName;



    /**
     * @ORM\Column(length=256, nullable=true)
     */
    private $teamPicture;

    /**
     * @ORM\OneToMany(targetEntity="SocialNetwork", mappedBy="teamMember", cascade={"all"})
     */
    private $socialNetworks;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->socialNetworks = new ArrayCollection();
    }
    /**
     * __toString.
     */
    public function __toString()
    {
        return $this->fullName;
    }

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
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getTeamPicture()
    {
        return $this->teamPicture;
    }

    /**
     * @param mixed $teamPicture
     */
    public function setTeamPicture($teamPicture)
    {
        $this->teamPicture = $teamPicture;
    }

    /**
     * Add socialNetwork
     *
     * @param SocialNetwork $socialNetwork
     *
     * @return TeamMember
     */
    public function addSocialNetwork(SocialNetwork $socialNetwork)
    {
        $socialNetwork->setTeamMember($this);
        $this->socialNetworks[] = $socialNetwork;
        return $this;
    }

    /**
     * Remove socialNetwork
     *
     * @param SocialNetwork $socialNetwork
     */
    public function removeSocialNetwork(SocialNetwork $socialNetwork)
    {
        $this->socialNetworks->removeElement($socialNetwork);
    }

    /**
     * Get socialNetworks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSocialNetworks()
    {
        return $this->socialNetworks;
    }

}

