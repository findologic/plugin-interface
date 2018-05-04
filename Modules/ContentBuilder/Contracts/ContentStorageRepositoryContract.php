<?php
namespace Plenty\Modules\ContentBuilder\Contracts;

use Plenty\Modules\ContentBuilder\Models\Content;

/**
 * ContentStorageRepositoryContract
 */
interface ContentStorageRepositoryContract 
{

	/**
	 * Create a new content data
	 */
	public function createContentData(
		int $contentId, 
		array $widgetData
	);

	/**
	 * Get content data
	 */
	public function getContentData(
		int $contentId
	);

}