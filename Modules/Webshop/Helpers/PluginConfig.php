<?php
namespace Plenty\Modules\Webshop\Helpers;

use Plenty\Plugin\ConfigRepository;

/**
 * Helper for plugin config values
 */
abstract class PluginConfig 
{

	abstract protected function load(
	);

	abstract protected function getPluginName(
	);

	/**
	 * Get Value from MultiSelect config
	 */
	protected function getMultiSelectValue(
		string $key, 
		array $possibleValues = [], 
		array $default = []
	)
	{
	}

	/**
	 * Get value from input text config
	 */
	protected function getTextValue(
		string $key, 
		string $default = "", 
		string $transformDefault = ""
	)
	{
	}

	/**
	 * Get value from integer config
	 */
	protected function getIntegerValue(
		string $key, 
		int $default = 0
	)
	{
	}

	protected function getBooleanValue(
		string $key, 
		bool $default = false
	)
	{
	}

	/**
	 * Get config value
	 */
	protected function getConfigValue(
		string $key, 
		 $default = null
	)
	{
	}

}