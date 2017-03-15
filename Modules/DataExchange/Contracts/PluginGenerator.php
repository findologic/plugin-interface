<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Modules\DataExchange\Models\FormatSetting;

/**
 * PluginGenerator
 */
abstract class PluginGenerator 
{

	const RESOURCE_PATH = 'data_exchange/exports';

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