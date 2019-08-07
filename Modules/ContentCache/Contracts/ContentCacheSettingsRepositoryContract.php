<?php
namespace Plenty\Modules\ContentCache\Contracts;

use Plenty\Modules\ContentCache\ContentCacheSettings\ContentCacheSettings;

/**
 * Interface for content cache settings
 */
interface ContentCacheSettingsRepositoryContract 
{

	public function getSettings(
		int $plentyId
	):ContentCacheSettings;

	public function getSettingsMultiple(
		array $plentyIds
	);

	public function saveSettings(
		int $plentyId, 
		bool $contentCacheActive
	):ContentCacheSettings;

}