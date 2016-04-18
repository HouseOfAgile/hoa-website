<?php

namespace AppBundle\EventListener;


use AppBundle\NotificationEvent;
use HOA\Bundle\NotificationBundle\Event\NotificationEventInterface;
use HOA\Bundle\NotificationBundle\EventListener\NotificationListener;
use HOA\Bundle\NotificationBundle\Services\MailerService;
use HOA\Bundle\NotificationBundle\Services\NotificationService;
use HOA\Bundle\NotificationBundle\Services\TwilioService;
use Symfony\Bridge\Monolog\Logger;
use Symfony\Component\Translation\TranslatorInterface;

class OfficeMailListener extends NotificationListener
{

    /**
     * @var $officeMail mail of the office
     */
    protected $officeMail;

    private static $emailTemplates = array(
        NotificationEvent::CONTACT_FORM => "mails/office/contactEmail.html.twig",
    );

    private static $smsTemplates = array();

    public function __construct(MailerService $mailer, TwilioService $twilioService, NotificationService $notificationService, Logger $logger,TranslatorInterface $translator, $officeMail)
    {
        parent::__construct($mailer, $twilioService, $notificationService, $logger,$translator);
        $this->officeMail = $officeMail;
    }

    public static function getSubscribedEvents()
    {
        return array(
            NotificationEvent::CONTACT_FORM => array(
                array('sendEMail', 0),
                // add more notifications here for this event if needed
            ),
        );
    }

    public function sendEmail(NotificationEventInterface $event)
    {
        if (!isset(self::$emailTemplates[$event->getName()])) {
            throw new \InvalidArgumentException('This event does not correspond to a known email template');
        }

        $context = array(
            'event' => $event->getEventContext()
        );
        // change language of the mail if needed (here english by default)
        if ($event->getLocale()!=null) {
            $this->translator->setLocale($event->getLocale());
        }
        $this->logger->info('Send a mail of type [' . $event->getName() . '] to ' . $this->officeMail);
        $this->mailerService->sendMessage(
            self::$emailTemplates[$event->getName()],
            $context,
            $this->officeMail
        );

    }

    public function sendSMS(NotificationEventInterface $event)
    {

    }

    public function sendPushNotification(NotificationEventInterface $event)
    {

    }

}