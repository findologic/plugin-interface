<?php
namespace Plenty\Modules\Webshop\Helpers;


/**
 * UnitUtils
 */
abstract class UnitUtils 
{

	const METER = 1;

	const DECIMETER = 2;

	const CENTIMETER = 3;

	const MILLIMETER = 4;

	/**
	 * Returns HTML code for the unit ('m','cm' o'MM')
	 */
	abstract public static function getHTML4Unit(
		string $unit = "SMM"
	):string;

}