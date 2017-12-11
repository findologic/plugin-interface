<?php
namespace Plenty\Plugin\Templates;

use App;
use Plenty\Log\Traits\Loggable;

/**
 * Twig engine
 */
abstract class Twig 
{

	/**
	 * Renders a template.
	 */
	abstract public function render(
		string $name, 
		array $context = []
	):string;

	/**
	 * Registers an extension.
	 */
	abstract public function addExtension(
		string $extension
	);

}