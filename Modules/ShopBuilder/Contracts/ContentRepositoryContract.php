<?php
namespace Plenty\Modules\ShopBuilder\Contracts;

use Plenty\Modules\ShopBuilder\Models\Content;

/**
 * Get, create, delete und update shop builder contents.
 */
interface ContentRepositoryContract 
{

	/**
	 * Get all contents to be edited in the shop builder.
	 */
	public function getContents(
	):array;

	/**
	 * Get a single content.
	 */
	public function getContent(
		int $contentId
	):Content;

	/**
	 * Create new content. New content will not be linked to any layout container.
	 */
	public function createContent(
		int $pluginSetId, 
		 $data
	):Content;

	/**
	 * Update content.
	 */
	public function updateContent(
		int $pluginSetId, 
		int $contentId, 
		 $data
	):Content;

	/**
	 * Delete content. Any connections to layout containers will be removed too.
	 */
	public function deleteContent(
		int $pluginSetId, 
		int $contentId
	);

}