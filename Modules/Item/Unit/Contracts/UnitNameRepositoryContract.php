<?php
namespace Plenty\Modules\Item\Unit\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Unit\Models\UnitName;

/**
 * Repository for unit name
 */
interface UnitNameRepositoryContract 
{

	public function create(
		array $data, 
		int $unitId
	):UnitName;

	public function delete(
		int $unitId, 
		string $lang
	):boolean;

	public function update(
		array $data, 
		int $unitId, 
		string $lang
	):UnitName;

	public function findOne(
		int $unitId, 
		string $lang
	):UnitName;

	public function findByUnitId(
		int $unitId
	):UnitName;

}