<?php
namespace Plenty\Modules\ShopBuilder\Providers;

use Plenty\Modules\ShopBuilder\Contracts\DataFieldRepositoryContract;
use Plenty\Plugin\Translation\Translator;

/**
 * Base class for data field providers.
 */
abstract class DataFieldProvider 
{

	abstract public function register(
	);

	/**
	 * Register a new data field.
	 */
	public function addField(
		string $identifier, 
		string $label, 
		string $expression
	)
	{
		return null;
	}

	/**
	 * Register a nested provider containing a list of child data fields.
	 */
	public function addChildProvider(
		string $label, 
		string $childProviderClass, 
		array $params = []
	)
	{
		return null;
	}

	/**
	 * Assign keywords to a field to be respected during search.
	 */
	public function addSearchKeywords(
		string $identifier, 
		array $keywords = []
	)
	{
		return null;
	}

}