<?php

namespace AppBundle\Entity;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

use Doctrine\ORM\Mapping as ORM;

/**
 * Services
 * @ORM\Entity
 */
class TeamMemberTranslation
{
    use ORMBehaviors\Translatable\Translation;

    /**
     * @ORM\Column(length=128)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $presentation;


    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }

    public function getPresentation()
    {
        return $this->presentation;
    }

}

