<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Event;
use AppBundle\Service\MarkdownTransformer;
use AppBundle\Service\NameGenerator;
use DateTime;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

Class EventsController extends Controller
{
	/**
	 *  @Route("/events", name="events_path")
	 *  @Method("GET")
	**/
	public function indexAction(Request $request, MarkdownTransformer $markdownTransformer, LoggerInterface $logger)
	{
		
		/*dump($this->container->get('logger'));
		die;*/

		/* affiche message d'erreur
		$logger = $this->get('logger');
		$logger->error('Je suis un message de log de type ERROR!');
		 */
		
		
		
		//$someMarkdown = 'Je suis du *super* code **MarkDown**';

		//$transformer = $this->get('app.markdown_transformer');
		//$someMarkdown = $transformer->parse($someMarkdown);

		

		//dump($request);


		//dump($markdownTransformer->parse('je suis **cool**'));
		//$logger->warning('Juste un test');


		dump($this->get('app.girl_name_generator')->getRandomName());

		$em = $this->getDoctrine()->getManager();
        
        $events = $em->getRepository(Event::class)->findAll();

         return $this->render('events/index.html.twig', compact('events'));


        /*$templating = $this->container->get('templating');

        $html = $templating->render('events/index.html.twig', compact('events'));

        return new Response($html);*/

        //return $this->render('events/index.html.twig', compact('events', 'someMarkdown'));


		
		/*
		$event = new Event;
		$event->setName('Laravel Conférence');
		$event->setLocation('Quebec, CA');
		$event->setPrice('0');

		$em = $this->getDoctrine()->getManager(); // Accès à l'entity manager via doctrine

		$em->persist($event); // persiste l'information en bdd
		$em->flush(); // push en bdd
		

		return new Response('<body><h1>Event created !</h1></body>');
		*/




		// return new Response('salut');
		/*
		$events = ['Symfony', 'Laravel', 'JavaScript', 'AngularJS'];
		
		
		$superSecretCalcul = 2 + 2 * 5;

		$currentTime = (new DateTime)->format('d/m/Y H:i:s');

		return $this->render('events/index.html.twig',[
			'superSecretCalcul' => $superSecretCalcul,
			'events' => $events,
			'currentTime' => $currentTime
			]);
		
		 return $this->render('events/index.html.twig', compact('events', 'currentTime'));
		*/
	}


	/**
	 *  @Route("/events/{id}", name="event_path", requirements={"id": "[0-9]+"})
	 *  @Method("GET")
	 *  
	**/
	public function showAction(Event $event)
	{
		
		/*$em = $this->getDoctrine()->getManager();

		$event = $em->getRepository(Event::class)->find($id);

		if (! $event) {
			throw $this->createNotFoundException(sprintf("Event with id '%d' not found", $id));
		}*/

		/* Vérifie le nom d'accès à la route
		dump($this->generateUrl('event_path', ['id' => $event->getId()]));
		die;
		*/
	
		return $this->render('events/show.html.twig', compact('event'));
	}
}