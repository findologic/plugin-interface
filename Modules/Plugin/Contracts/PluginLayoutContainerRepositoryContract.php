<?php
namespace Plenty\Modules\Plugin\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Plugin\Models\LayoutContainer;
use Plenty\Modules\Plugin\PluginSet\Models\PluginSet;

/**
 * Plugin layout container
 */
interface PluginLayoutContainerRepositoryContract 
{

	public function all(
		int $pluginSetId
	);

	public function updateAll(
		array $dataList, 
		int $pluginSetId
	);

	public function getActiveLinkedLayoutContainers(
		array $activeContainerKeysList, 
		array $activeDataProviderKeysList, 
		int $pluginSetId = null
	);

	public function getActiveLinkedLayoutContainersByPluginSetId(
		array $activeContainerKeysList, 
		array $activeDataProviderKeysList, 
		int $pluginSetId
	);

	public function addNew(
		array $dataList, 
		int $pluginSetId
	);

}