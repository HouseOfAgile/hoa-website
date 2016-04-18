<?php

namespace AppBundle\Entity;

use Knp\DoctrineBehaviors\Model as ORMBehaviors;

use Doctrine\ORM\Mapping as ORM;

/**
 * Services
 * @ORM\Entity
 * @ORM\Table(name="service")
 */
class Service
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
     * @ORM\Column(length=256, nullable=true)
     */
    private $name;
    /**
     * @ORM\Column(length=32, nullable=true)
     */
    private $icon;

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
     * @return mixed
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

}

