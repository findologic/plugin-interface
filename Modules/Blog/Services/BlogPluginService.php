<?php
namespace Plenty\Modules\Blog\Services;

use Plenty\Modules\Category\Contracts\CategoryRepositoryContract;

/**
 * Blog plugin service
 */
abstract class BlogPluginService 
{

	/**
	 * Get plugin set ID
	 */
	abstract public function getPluginSetIdFromConfig(
	);

	abstract public function findCategoryByUrl(
		string $level1, 
		string $level2 = null, 
		string $level3 = null, 
		string $level4 = null, 
		string $level5 = null, 
		string $level6 = null, 
		int $webstoreId = null, 
		string $lang = null
	);

}