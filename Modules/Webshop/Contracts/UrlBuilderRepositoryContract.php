<?php
namespace Plenty\Modules\Webshop\Contracts;

use Plenty\Modules\Webshop\Helpers\UrlQuery;

/**
 * Build urls
 */
interface UrlBuilderRepositoryContract 
{

	/**
	 * Build item url
	 */
	public function buildItemUrl(
		int $itemId, 
		string $lang = null
	);

	/**
	 * Build category url
	 */
	public function buildCategoryUrl(
		int $categoryId, 
		string $lang = null, 
		int $webstoreId = null
	):UrlQuery;

	/**
	 * Fill item url
	 */
	public function fillItemUrl(
		array $itemData
	);

	/**
	 * Build variation url
	 */
	public function buildVariationUrl(
		int $itemId, 
		int $variationId, 
		string $lang = null
	):UrlQuery;

	/**
	 * Get suffix
	 */
	public function getSuffix(
		int $itemId, 
		int $variationId, 
		bool $withVariationId = true
	):string;

}