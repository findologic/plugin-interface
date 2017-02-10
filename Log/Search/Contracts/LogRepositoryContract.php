<?php
namespace Plenty\Log\Search\Contracts;

use Plenty\Log\Models\Log;
use Plenty\Repositories\Models\FilteredPaginatedResult;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Contract for logs.
 */
interface LogRepositoryContract 
{

	/**
	 * Search logs with the given filters.
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = [], 
		string $sortBy = "createdAt", 
		string $sortOrder = "desc"
	):FilteredPaginatedResult;

}