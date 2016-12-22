<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\Property;

/**
 * Repository for property
 */
interface PropertyRepositoryContract 
{

	public function create(
		array $data
	):Property;

	public function show(
		int $id
	):Property;

	public function update(
		array $data, 
		int $id
	);

	public function delete(
		int $id
	):boolean;

	public function findById(
		int $id
	):Property;

	public function all(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1
	):array;

}