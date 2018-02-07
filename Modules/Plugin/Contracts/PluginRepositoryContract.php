<?php
namespace Plenty\Modules\Plugin\Contracts;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Item\DataLayer\Models\Record;
use Plenty\Modules\Plugin\Marketplace\Contracts\MarketplaceRepositoryContract;
use Plenty\Modules\Plugin\Models\Plugin;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Search plugins according to parameters
 */
interface PluginRepositoryContract 
{

	/**
	 * Search plugins using filters. Example: searchPlugins(['name' => 'PluginIWantToFind'])
	 */
	public function searchPlugins(
		array $params = [], 
		int $itemsPerPage = \Plenty\Modules\Plugin\Models\Plugin::DEFAULT_ITEMS_PER_PAGE
	):PaginatedResult;

}