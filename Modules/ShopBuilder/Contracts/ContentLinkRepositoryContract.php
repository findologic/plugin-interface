<?php
namespace Plenty\Modules\ShopBuilder\Contracts;

use Plenty\Modules\ShopBuilder\Models\ContentLink;

/**
 * Get, create, delete and update links between shop builder contents and layout containers.
 */
interface ContentLinkRepositoryContract 
{

	/**
	 * Get all linked contents for a plugin set
	 */
	public function getContentLinks(
		int $pluginSetId
	):array;

	/**
	 * Get a single connection between a content and a layout container
	 */
	public function getContentLink(
		int $contentLinkId
	):ContentLink;

	/**
	 * Link a content to a layout container
	 */
	public function createContentLink(
		 $data
	):ContentLink;

	/**
	 * Update a link between a content and a layout container
	 */
	public function updateContentLink(
		int $contentLinkId, 
		array $data
	):ContentLink;

	/**
	 * Unlink a content from a layout container. The content itself will remain
	 */
	public function deleteContentLink(
		int $contentLinkId
	);

	/**
	 * Get all content links for a specific layout container.
	 */
	public function getContentLinksForContainer(
		string $containerName, 
		int $pluginSetId = null, 
		string $lang = null
	):array;

}