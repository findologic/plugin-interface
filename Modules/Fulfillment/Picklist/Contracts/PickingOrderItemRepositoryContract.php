<?php
namespace Plenty\Modules\Fulfillment\Picklist\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Fulfillment\Picklist\Models\PickingOrderItem;

/**
 * The PickingOrderItemRepositoryContract
 */
interface PickingOrderItemRepositoryContract 
{

	public function getAll(
	):Collection;

	public function getPickingOrderItemById(
		int $pickingOrderItemId
	):PickingOrderItem;

}