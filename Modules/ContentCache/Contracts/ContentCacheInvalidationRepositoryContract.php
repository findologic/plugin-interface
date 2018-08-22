<?php
namespace Plenty\Modules\ContentCache\Contracts;


/**
 * Interface for content cache invalidation
 */
interface ContentCacheInvalidationRepositoryContract 
{

	/**
	 * Invalidate all cache entries related to given variation ids.
	 */
	public function invalidateVariationIds(
		array $variationIds, 
		int $plentyId = null
	);

	/**
	 * Invalidate all cache entries related to given plenty id.
	 */
	public function invalidateAll(
		int $plentyId
	);

	/**
	 * Invalidate cache entries by URI
	 */
	public function invalidateUri(
		string $uri
	);

	public function storeInvalidationStacks(
	);

}