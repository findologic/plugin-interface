<?php
namespace Plenty\Modules\Plugin\PluginSet\Contracts;

use Plenty\Modules\Plugin\PluginSet\Models\PluginSetEntry;

/**
 * get, create, update or delete plugin set entries
 */
interface PluginSetEntryRepositoryContract 
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

}