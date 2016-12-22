<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertyGroup;

/**
 * Repository for property group
 */
interface PropertyGroupRepositoryContract 
{

	public function create(
		array $data
	):PropertyGroup;

	public function show(
		int $id
	):PropertyGroup;

	public function update(
		array $data, 
		int $id
	);

	public function delete(
		int $id
	):boolean;

	public function findById(
		int $id
	):PropertyGroup;

	public function all(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1
	):array;

}