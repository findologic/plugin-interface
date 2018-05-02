<?php
namespace Plenty\Modules\ContentBuilder\Contracts;

use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Get and create content links.
 */
interface ContentLinkRepositoryContract 
{

	/**
	 * List contents links
	 */
	public function listContentsLinks(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
	):PaginatedResult;

	/**
	 * Get a content link
	 */
	public function getContentLink(
		int $contentLinkId
	);

	/**
	 * Create a new content link
	 */
	public function createContentLink(
		array $data
	);

	/**
	 * Update a content link
	 */
	public function updateContentLink(
		array $data, 
		int $contentLinkId
	);

	public function getContentLinksForContainer(
		string $container, 
		int $setId = null
	);

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

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

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}