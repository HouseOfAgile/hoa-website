<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage",
     * requirements={"url" = ".*\/$"})
     */
    public function indexAction(Request $request)
    {

        $activeSections = array('services', 'team','contact');
        $members = $repository = $this->getDoctrine()
            ->getRepository('AppBundle:TeamMember')->findAll();
        $services = $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Service')->findAll();
        // replace this example code with whatever you need
        $contact = new Contact();

        $form = $this->createForm('contact_form', $contact);
        $form->handleRequest($request);
        $contactSent = false;
        if ($form->isValid()) {
            $this->get('manager.contact')->sendContactMessage($contact);
            $contactSent = true;
            return $this->redirect($this->generateUrl('contact_success'));

        } elseif ($form->isSubmitted()) {
            $this->addFlash('warning', 'contact.cannot_send_contact_message');
        }
        return $this->render('app/homepage.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
            'services' => $services,
            'members' => $members,
            'active_sections' => $activeSections,
            'contact_form' => $form->createView(),
            'contactSent' => $contactSent,

        ));
    }
    /**
     * @Route("/lets-keep-in-touch", name="contact_success")
     */
    public function letsKeepInTouchAction(Request $request)
    {
        return $this->render('app/letsKeepInTouch.html.twig', array(
            'active_sections' => null,

        ));
    }

}
