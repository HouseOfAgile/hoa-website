<?php

namespace AppBundle\Entity;

use Knp\DoctrineBehaviors\Model as ORMBehaviors;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocialNetwork
 * @ORM\Entity
 * @ORM\Table(name="social_network")
 */
class SocialNetwork
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
     * @ORM\Column(length=32, nullable=true)
     */
    private $name;
    /**
     * @ORM\Column(length=256, nullable=true)
     */
    private $url;

    /**
     * @var TeamMember
     *
     * @ORM\ManyToOne(targetEntity="TeamMember", inversedBy="socialNetworks", cascade={"persist"})
     */
    protected $teamMember;

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return TeamMember
     */
    public function getTeamMember()
    {
        return $this->teamMember;
    }

    /**
     * @param TeamMember $teamMember
     */
    public function setTeamMember($teamMember)
    {
        $this->teamMember = $teamMember;
    }


}

