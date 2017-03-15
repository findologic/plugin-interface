<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Modules\DataExchange\Models\FormatSetting;

/**
 * Generator
 */
abstract class Generator 
{

	const RESOURCE_PATH = 'data_exchange/exports';

	protected function addContent(
		string $content
	)
	{
	}

	abstract protected function generateContent(
		 $resultData, 
		array $formatSettings = []
	);

}