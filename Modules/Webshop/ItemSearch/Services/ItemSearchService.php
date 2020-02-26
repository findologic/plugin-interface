<?php
namespace Plenty\Modules\Webshop\ItemSearch\Services;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Webshop\ItemSearch\Factories\BaseSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Factories\MultiSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\DefaultSearchResult;

/**
 * Execute VDI requests
 */
abstract class ItemSearchService 
{

	/**
	 * Get search results for multiple search requests.
	 */
	abstract public function getResults(
		array $searches
	):array;

	/**
	 * Get result of a single search factory;
	 */
	abstract public function getResult(
		BaseSearchFactory $searchFactory
	):array;

}