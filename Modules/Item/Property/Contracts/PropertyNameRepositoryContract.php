<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertyName;

/**
 * Repository for property name
 */
interface PropertyNameRepositoryContract 
{

	public function create(
		array $data, 
		int $propertyId
	):PropertyName;

	public function delete(
		int $propertyId, 
		string $lang
	):boolean;

	public function update(
		array $data, 
		int $propertyId, 
		string $lang
	):PropertyName;

	public function findOne(
		int $propertyId, 
		string $lang
	):PropertyName;

	public function findByPropertyId(
		int $propertyId
	):PropertyName;

}