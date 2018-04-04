<?php
namespace Plenty\Modules\Item\ItemImage\Contracts;

use Plenty\Legacy\Models\Item\ItemImageSettings;

/**
 * Get, update or invalidate item image settings
 */
interface ItemImageSettingsRepositoryContract 
{

	public function get(
	):ItemImageSettings;

	public function update(
		 $data
	):ItemImageSettings;

	public function invalidate(
		string $path
	):ItemImageSettings;

}