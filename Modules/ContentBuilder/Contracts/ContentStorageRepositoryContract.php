<?php
namespace Plenty\Modules\ContentBuilder\Contracts;

use Plenty\Modules\ContentBuilder\Models\Content;

/**
 * This module is deprecated. Use module 'Shop Builder' instead.
 */
interface ContentStorageRepositoryContract 
{

	public function createContentData(
		int $contentId, 
		array $widgetData
	);

	public function getContentData(
		int $contentId
	);

}