<?php
namespace Plenty\Modules\Plugin\PluginSet\Contracts;

use Plenty\Modules\Plugin\PluginSet\Models\PluginSet;
use Plenty\Modules\Plugin\PluginSet\Models\PluginSetEntry;

/**
 * list, create, update or delete plugin sets
 */
interface PluginSetRepositoryContract 
{

	public function create(
		array $data
	);

	public function update(
		int $id, 
		array $data
	);

	public function delete(
		 $what
	);

	public function get(
		int $id
	);

	public function list(
	);

	public function listSetEntries(
		int $id
	);

	public function listWebstores(
		int $id
	);

	public function listLayoutContainers(
		int $id
	);

	public function getOrCreatePluginSetEntry(
		int $id, 
		int $pluginId, 
		bool $withTrashed = false
	):PluginSetEntry;

	public function removePluginFromSet(
		int $setId, 
		int $pluginId
	);

}