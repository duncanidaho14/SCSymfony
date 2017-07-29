<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Project;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

Class ProjectsController extends Controller
{
	/**
	 *  @Route("/projects")
	**/
	public function indexAction()
	{
		
		$project = new Project;
		$project->setName('ECMAScript Conférence');
		$project->setDescription('lorem ipsum lorem ipsum lorem');
		$project->setTargetAmount('22.22');

		$em = $this->getDoctrine()->getManager(); // Accès à l'entity manager via doctrine

		$em->persist($project); // persiste l'information en bdd
		$em->flush(); // push en bdd
		

		return new Response('<body><h1>Project created !</h1></body>');


		//$projects = ['ECMAScript7', 'ReactJS', 'C', 'C++', 'java'];


		//return $this->render('projects/index.html.twig', compact('projects'));
	}
} 