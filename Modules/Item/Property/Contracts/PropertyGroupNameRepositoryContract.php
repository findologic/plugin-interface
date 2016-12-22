<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertyGroupName;

/**
 * Repository for property group name
 */
interface PropertyGroupNameRepositoryContract 
{

	public function create(
		array $data, 
		int $propertyGroupId
	):PropertyGroupName;

	public function delete(
		int $propertyGroupId, 
		string $lang
	):boolean;

	public function update(
		array $data, 
		int $propertyGroupId, 
		string $lang
	):PropertyGroupName;

	public function findOne(
		int $propertyGroupId, 
		string $lang
	):PropertyGroupName;

	public function findByPropertyGroupId(
		int $propertyGroupId
	):array;

}