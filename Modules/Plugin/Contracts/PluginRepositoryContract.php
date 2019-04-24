<?php
namespace Plenty\Modules\Plugin\Contracts;

use Illuminate\Support\Collection;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Item\DataLayer\Models\Record;
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

	public function isActiveInPluginSet(
		int $pluginId, 
		int $pluginSetId
	):bool;

	public function isActiveInPluginSetByName(
		string $pluginName, 
		int $pluginSetId
	):bool;

	public function isActiveInWebstore(
		int $pluginId, 
		int $webstoreId
	):bool;

	public function isActiveInWebstoreByPluginName(
		string $pluginName, 
		int $webstoreId
	):bool;

}