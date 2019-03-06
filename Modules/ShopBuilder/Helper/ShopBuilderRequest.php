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

}