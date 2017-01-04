<?php
namespace Plenty\Modules\Item\ItemCrossSelling\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\ItemCrossSelling\Models\ItemCrossSelling;

/**
 * Repository for ItemCrossSelling
 */
interface ItemCrossSellingRepositoryContract 
{

	public function create(
		array $data
	):ItemCrossSelling;

	public function show(
		int $itemId
	):ItemCrossSelling;

	public function delete(
		int $itemId, 
		int $crossItemId
	):boolean;

	public function findByItemId(
		int $itemId
	):array;

}