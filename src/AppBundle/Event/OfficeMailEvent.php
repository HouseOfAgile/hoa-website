<?php

namespace AppBundle\Event;

use HOA\Bundle\NotificationBundle\Event\NotificationEventInterface;
use Symfony\Component\EventDispatcher\Event;


class OfficeMailEvent extends Event implements NotificationEventInterface
{

    private $eventContext;
    private $mail;


    public function __construct($contextData)
    {
        $this->eventContext = $contextData;
    }

    public function getEventContext()
    {
        return $this->eventContext;
    }

    public function getNotificationOwner()
    {
        return $this->getEventContext();
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return "en";
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

    }
}