<?php

namespace AppBundle\Entity;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

use Doctrine\ORM\Mapping as ORM;

/**
 * StandardBlockTranslation
 * @ORM\Entity
 */
class StandardBlockTranslation
{
    use ORMBehaviors\Translatable\Translation;

    /**
     * @ORM\Column(length=128)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;


    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

}

