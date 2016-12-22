<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertySelection;

/**
 * Repository for property selection
 */
interface PropertySelectionRepositoryContract 
{

	public function create(
		array $data, 
		int $propertyId
	):PropertySelection;

	public function delete(
		int $propertyId, 
		string $lang
	):boolean;

	public function update(
		array $data, 
		int $propertyId, 
		string $lang
	):PropertySelection;

	public function findOne(
		int $propertyId, 
		string $lang
	):PropertySelection;

	public function findByPropertyId(
		int $propertyId
	):PropertySelection;

}