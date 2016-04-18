<?php
namespace AppBundle\Manager;

use AppBundle\Event\OfficeMailEvent;
use AppBundle\NotificationEvent;
use Doctrine\ORM\EntityManager;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class ContactManager
{
    /**
     * @var EntityManager
     */
    private $manager;

    protected $dispatcher;

    public function __construct($manager, EventDispatcherInterface $dispatcher)
    {
        $this->manager = $manager;
        $this->dispatcher = $dispatcher;

    }

    public function sendContactMessage($data)
    {
        $this->saveContactMessage($data);
        $event = new OfficeMailEvent($data);
        $this->dispatcher->dispatch(NotificationEvent::CONTACT_FORM, $event);

    }

    public function saveContactMessage($data)
    {
        $this->manager->persist($data);
        $this->manager->flush();
    }

}