<?php

namespace AppBundle\Twig;

use Exception;
use Twig_Extension;
use Twig_SimpleFunction;
use AppBundle\Entity\Event;

/**
* 
*/
class AppExtension extends Twig_Extension
{
	


	public function getFunctions()
	{
		return [
			new Twig_SimpleFunction('pluralize', [$this, 'pluralize']),
			new Twig_SimpleFunction('format_price', [$this, 'formatPrice'], ['is_safe' => ['html']]),
		];
	}

	public function formatPrice(Event $event)
	{
		if ($event->isFree()) {
			return '<strong>Free</strong>';
		} else {
			return twig_localized_currency_filter($event->getPrice(), 'USD');
		}
	}

	public function pluralize($count, $singular, $plural = null) 
	{
		if (! is_numeric($count)) {
			throw new Exception("$count must be a numeric value.");
			
		}

		if (is_null($plural)) {
			$plural = $singular . 's';
		}

		switch ($count) {
			case 1:
				$string = $singular;
				break;
			
			default:
				$string = $plural;
				break;
				
		}

		return sprintf("%d %s", $count, $string);
	}

	public function getName()
	{
		return 'app_extension';
	}
}