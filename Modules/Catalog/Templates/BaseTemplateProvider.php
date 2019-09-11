<?php
namespace Plenty\Modules\Catalog\Templates;

use Plenty\Modules\Catalog\Contracts\CatalogTemplateProviderContract;
use Plenty\Modules\Catalog\Contracts\TemplateContract;

/**
 * foo
 */
abstract class BaseTemplateProvider implements CatalogTemplateProviderContract

{

	abstract public function getMappings(
	):array;

	abstract public function getFilter(
	):array;

	abstract public function getPreMutators(
	):array;

	abstract public function getPostMutators(
	):array;

	abstract public function getSkuCallback(
	):callable;

	abstract public function getSettings(
	):array;

	abstract public function getMetaInfo(
	):array;

}