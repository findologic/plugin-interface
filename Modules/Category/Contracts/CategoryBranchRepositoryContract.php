<?php
namespace Plenty\Modules\Category\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Category\Models\CategoryBranch;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Contracts\PaginationResponseContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * Repository Contract for CategoryBranch
 */
interface CategoryBranchRepositoryContract 
{

	public function find(
		int $id
	):CategoryBranch;

	/**
	 * Get category trees
	 */
	public function get(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = []
	):PaginationResponseContract;

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

}