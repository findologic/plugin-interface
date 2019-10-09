<?php
namespace Carbon;

use Carbon\Exceptions\InvalidDateException;
use Closure;
use DatePeriod;
use DateTime;
use DateTimeInterface;
use DateTimeZone;
use InvalidArgumentException;
use JsonSerializable;
use Symfony\Component\Translation\TranslatorInterface;

class Carbon extends \DateTime 

{
	public		$year;
	public		$yearIso;
	public		$month;
	public		$day;
	public		$hour;
	public		$minute;
	public		$second;
	public		$timestamp;
	public		$timezone;
	public		$tz;
	
	/**
	 * Get a Carbon instance for the current date and time.
	 */
	abstract public static function now(
		 $tz = null
	):Carbon;

	/**
	 * Get the difference in years
	 */
	abstract public function diffInYears(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in months
	 */
	abstract public function diffInMonths(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in weeks
	 */
	abstract public function diffInWeeks(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in days
	 */
	abstract public function diffInDays(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in hours.
	 */
	abstract public function diffInHours(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in minutes.
	 */
	abstract public function diffInMinutes(
		 $date = null, 
		bool $absolute = true
	):int;

}