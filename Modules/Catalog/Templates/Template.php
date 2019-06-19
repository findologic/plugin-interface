<?php
namespace Plenty\Modules\Catalog\Templates;

use Plenty\Modules\Catalog\Contracts\TemplateContract;
use Plenty\Modules\Catalog\Validators\FilterValidator;
use Plenty\Modules\Catalog\Validators\MappingValidator;
use Plenty\Modules\Catalog\Validators\SettingValidator;

/**
 * foo
 */
abstract class Template implements TemplateContract

{

	abstract public function getMappings(
	):array;

	abstract public function addMapping(
		array $section
	);

	abstract public function addMutator(
		callable $callback
	);

	abstract public function getMutators(
	):array;

	abstract public function addPreMutator(
		callable $callback
	);

	abstract public function addPostMutator(
		callable $callback
	);

	abstract public function getFilter(
	):array;

	abstract public function addFilter(
		array $filter
	);

	abstract public function getPreMutators(
	):array;

	abstract public function getPostMutators(
	):array;

	abstract public function setSkuCallback(
		callable $callback
	);

	abstract public function getSkuCallback(
	):callable;

	abstract public function addSetting(
		array $setting
	);

	abstract public function getSettings(
	):array;

	abstract public function setMetaInfo(
		array $meta
	);

	abstract public function getMetaInfo(
	);

	abstract public function getName(
	):string;

	abstract public function getType(
	):string;

	abstract public function toArray(
	);

	abstract public function jsonSerialize(
	);

	abstract public function getIdentifier(
	):string;

}