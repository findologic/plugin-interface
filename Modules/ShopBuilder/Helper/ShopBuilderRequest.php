<?php
namespace Plenty\Modules\ShopBuilder\Helper;

use Illuminate\Http\Request;
use Plenty\Modules\Authentication\Services\Hasher\AdminPreviewHasher;

/**
 * Information provided by each request made from the shop builder preview.
 */
abstract class ShopBuilderRequest 
{

	abstract public function isShopBuilder(
	):bool;

	abstract public function getPreviewContentType(
	):string;

	abstract public function getMainContentType(
	):string;

	abstract public function setMainContentType(
		string $mainContentType
	);

	abstract public function getMainContainerName(
	):string;

	abstract public function setMainContainerName(
		string $mainContainerName
	);

	abstract public function setMainCategory(
		 $mainCategory
	);

}