<?php
namespace Plenty\Modules\Catalog\Contracts;

use Illuminate\Contracts\Support\Arrayable;

/**
 * To be written
 */
interface TemplateContract 
{

	public function getName(
	):string;

	public function getType(
	):string;

	public function getExportType(
	):string;

	public function getMappings(
	):array;

	public function addMapping(
		array $mapping
	);

	public function addMutator(
		callable $callback
	);

	public function addPreMutator(
		callable $callback
	);

	public function addPostMutator(
		callable $callback
	);

	public function getFilter(
	):array;

	public function addFilter(
		array $filter
	);

	public function getIdentifier(
	):string;

	public function getMutators(
	):array;

	public function getPreMutators(
	):array;

	public function getPostMutators(
	):array;

	public function setSkuCallback(
		callable $callback
	);

	public function getSkuCallback(
	):callable;

	public function addSetting(
		array $setting
	);

	public function getSettings(
	):array;

	public function setMetaInfo(
		array $meta
	);

	public function getMetaInfo(
	):array;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

	public function jsonSerialize(
	);

}