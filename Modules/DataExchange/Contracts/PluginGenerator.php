<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Modules\DataExchange\Models\FormatSetting;

/**
 * PluginGenerator
 */
abstract class PluginGenerator 
{

	protected function addContent(
		string $content
	)
	{
	}

	abstract protected function generatePluginContent(
		 $resultData, 
		array $formatSettings = [], 
		array $filter = []
	);

}