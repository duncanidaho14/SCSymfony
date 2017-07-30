<?php

namespace AppBundle\Service;

use Psr\Log\LoggerInterface;

/**
* 
*/
class NameGenerator
{

	private $logger;
	private $names;

	public function __construct(LoggerInterface $logger, $names)
	{
		$this->logger = $logger;
		$this->names = $names;
	}

	public function getRandomName()
	{
		$randomIndex = array_rand($this->names);

		$randomName = $this->names[$randomIndex];

		$this->logger->info($randomName);

		return $randomName;
	}
}