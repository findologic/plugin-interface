<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertyMarketReference;

/**
 * Repository for property market component
 */
interface PropertyMarketReferenceRepositoryContract 
{

	public function create(
		array $data, 
		int $propertyId
	):PropertyMarketReference;

	public function delete(
		int $propertyId, 
		float $marketId
	):boolean;

	public function update(
		array $data, 
		int $propertyId, 
		float $marketId
	):PropertyMarketReference;

	public function findOne(
		int $propertyId, 
		float $marketId
	):PropertyMarketReference;

	public function findByPropertyId(
		int $propertyId
	):PropertyMarketReference;

	public function getPropertyMarketReferences(
		float $referrerId, 
		int $componentId = null
	):array;

}