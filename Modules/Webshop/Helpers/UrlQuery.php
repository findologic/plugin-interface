<?php
namespace Plenty\Modules\Webshop\Helpers;

use Plenty\Modules\Webshop\Contracts\LocalizationRepositoryContract;
use Plenty\Modules\Webshop\Contracts\WebstoreConfigurationRepositoryContract;
use Plenty\Plugin\ConfigRepository;

/**
 * Build URL queries
 */
abstract class UrlQuery 
{

	/**
	 * Get information for trailing slash
	 */
	abstract public static function shouldAppendTrailingSlash(
	):bool;

	/**
	 * Append given suffix to path
	 */
	abstract public function append(
		string $suffix
	):self;

	/**
	 * Join a given path to path
	 */
	abstract public function join(
		string $path
	):self;

	/**
	 * Return path as absolute url
	 */
	abstract public function toAbsoluteUrl(
		bool $includeLanguage = false
	):string;

	/**
	 * Return path as relative url
	 */
	abstract public function toRelativeUrl(
		bool $includeLanguage = false
	):string;

	/**
	 * Return path
	 */
	abstract public function getPath(
		bool $includeLanguage = false
	);

	/**
	 * Compare path
	 */
	abstract public function equals(
		string $path
	):bool;

}