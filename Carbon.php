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
	
	abstract public static function setHumanDiffOptions(
		int $humanDiffOptions
	);

	abstract public static function enableHumanDiffOption(
		int $humanDiffOption
	);

	abstract public static function disableHumanDiffOption(
		int $humanDiffOption
	);

	abstract public static function getHumanDiffOptions(
	):int;

	/**
	 * Add microseconds to now on PHP < 7.1 and 7.1.3 if set to true,
let microseconds to 0 on those PHP versions if false.
	 */
	abstract public static function useMicrosecondsFallback(
		bool $microsecondsFallback = true
	);

	/**
	 * Return true if microseconds fallback on PHP < 7.1 and 7.1.3 is
enabled. false if disabled.
	 */
	abstract public static function isMicrosecondsFallbackEnabled(
	):bool;

	/**
	 * Indicates if months should be calculated with overflow.
	 */
	abstract public static function useMonthsOverflow(
		bool $monthsOverflow = true
	);

	/**
	 * Reset the month overflow behavior.
	 */
	abstract public static function resetMonthsOverflow(
	);

	/**
	 * Get the month overflow behavior.
	 */
	abstract public static function shouldOverflowMonths(
	):bool;

	/**
	 * Indicates if years should be calculated with overflow.
	 */
	abstract public static function useYearsOverflow(
		bool $yearsOverflow = true
	);

	/**
	 * Reset the month overflow behavior.
	 */
	abstract public static function resetYearsOverflow(
	);

	/**
	 * Get the month overflow behavior.
	 */
	abstract public static function shouldOverflowYears(
	):bool;

	/**
	 * Create a Carbon instance from a DateTime one.
	 */
	abstract public static function instance(
		 $date
	):Carbon;

	/**
	 * Create a carbon instance from a string.
	 */
	abstract public static function parse(
		string $time = null, 
		 $tz = null
	):Carbon;

	/**
	 * Get a Carbon instance for the current date and time.
	 */
	abstract public static function now(
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance for today.
	 */
	abstract public static function today(
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance for tomorrow.
	 */
	abstract public static function tomorrow(
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance for yesterday.
	 */
	abstract public static function yesterday(
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance for the greatest supported date.
	 */
	abstract public static function maxValue(
	):Carbon;

	/**
	 * Create a Carbon instance for the lowest supported date.
	 */
	abstract public static function minValue(
	):Carbon;

	/**
	 * Create a new Carbon instance from a specific date and time.
	 */
	abstract public static function create(
		int $year = null, 
		int $month = null, 
		int $day = null, 
		int $hour = null, 
		int $minute = null, 
		int $second = null, 
		 $tz = null
	):Carbon;

	/**
	 * Create a new safe Carbon instance from a specific date and time.
	 */
	abstract public static function createSafe(
		int $year = null, 
		int $month = null, 
		int $day = null, 
		int $hour = null, 
		int $minute = null, 
		int $second = null, 
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance from just a date. The time portion is set to now.
	 */
	abstract public static function createFromDate(
		int $year = null, 
		int $month = null, 
		int $day = null, 
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance from just a date. The time portion is set to midnight.
	 */
	abstract public static function createMidnightDate(
		int $year = null, 
		int $month = null, 
		int $day = null, 
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance from just a time. The date portion is set to today.
	 */
	abstract public static function createFromTime(
		int $hour = null, 
		int $minute = null, 
		int $second = null, 
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance from a time string. The date portion is set to today.
	 */
	abstract public static function createFromTimeString(
		string $time, 
		 $tz = null
	):Carbon;

	/**
	 * {@inheritdoc}
	 */
	abstract public static function getLastErrors(
	);

	/**
	 * Create a Carbon instance from a timestamp.
	 */
	abstract public static function createFromTimestamp(
		int $timestamp, 
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance from a timestamp in milliseconds.
	 */
	abstract public static function createFromTimestampMs(
		int $timestamp, 
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance from an UTC timestamp.
	 */
	abstract public static function createFromTimestampUTC(
		int $timestamp
	):Carbon;

	/**
	 * Get a copy of the instance.
	 */
	abstract public function copy(
	):Carbon;

	/**
	 * Returns a present instance in the same timezone.
	 */
	abstract public function nowWithSameTz(
	):Carbon;

	/**
	 * Set the instance's year
	 */
	abstract public function year(
		int $value
	):Carbon;

	/**
	 * Set the instance's month
	 */
	abstract public function month(
		int $value
	):Carbon;

	/**
	 * Set the instance's day
	 */
	abstract public function day(
		int $value
	):Carbon;

	/**
	 * Set the instance's hour
	 */
	abstract public function hour(
		int $value
	):Carbon;

	/**
	 * Set the instance's minute
	 */
	abstract public function minute(
		int $value
	):Carbon;

	/**
	 * Set the instance's second
	 */
	abstract public function second(
		int $value
	):Carbon;

	/**
	 * Sets the current date of the DateTime object to a different date.
	 */
	abstract public function setDate(
		int $year, 
		int $month, 
		int $day
	):Carbon;

	/**
	 * Set the date and time all together
	 */
	abstract public function setDateTime(
		int $year, 
		int $month, 
		int $day, 
		int $hour, 
		int $minute, 
		int $second = 0
	):Carbon;

	/**
	 * Set the time by time string
	 */
	abstract public function setTimeFromTimeString(
		string $time
	):Carbon;

	/**
	 * Set the instance's timestamp
	 */
	abstract public function timestamp(
		int $value
	):Carbon;

	/**
	 * Alias for setTimezone()
	 */
	abstract public function timezone(
		 $value
	):Carbon;

	/**
	 * Alias for setTimezone()
	 */
	abstract public function tz(
		 $value
	):Carbon;

	/**
	 * Set the year, month, and date for this instance to that of the passed instance.
	 */
	abstract public function setDateFrom(
		 $date
	):Carbon;

	/**
	 * Set the hour, day, and time for this instance to that of the passed instance.
	 */
	abstract public function setTimeFrom(
		 $date
	):Carbon;

	/**
	 * Get the days of the week
	 */
	abstract public static function getDays(
	):array;

	/**
	 * Get the first day of week
	 */
	abstract public static function getWeekStartsAt(
	):int;

	/**
	 * Set the first day of week
	 */
	abstract public static function setWeekStartsAt(
		int $day
	);

	/**
	 * Get the last day of week
	 */
	abstract public static function getWeekEndsAt(
	):int;

	/**
	 * Set the last day of week
	 */
	abstract public static function setWeekEndsAt(
		int $day
	);

	/**
	 * Get weekend days
	 */
	abstract public static function getWeekendDays(
	):array;

	/**
	 * Set weekend days
	 */
	abstract public static function setWeekendDays(
		array $days
	);

	/**
	 * get midday/noon hour
	 */
	abstract public static function getMidDayAt(
	):int;

	/**
	 * Set midday/noon hour
	 */
	abstract public static function setMidDayAt(
		int $hour
	);

	/**
	 * Determine if a time string will produce a relative date.
	 */
	abstract public static function hasRelativeKeywords(
		string $time
	):bool;

	/**
	 * Set if UTF8 will be used for localized date/time
	 */
	abstract public static function setUtf8(
		bool $utf8
	);

	/**
	 * Format the instance with the current locale.  You can set the current
locale using setlocale() http://php.net/setlocale.
	 */
	abstract public function formatLocalized(
		string $format
	):string;

	/**
	 * Reset the format used to the default when type juggling a Carbon instance to a string
	 */
	abstract public static function resetToStringFormat(
	);

	/**
	 * Set the default format used when type juggling a Carbon instance to a string
	 */
	abstract public static function setToStringFormat(
		string $format
	);

	/**
	 * Format the instance as date
	 */
	abstract public function toDateString(
	):string;

	/**
	 * Format the instance as a readable date
	 */
	abstract public function toFormattedDateString(
	):string;

	/**
	 * Format the instance as time
	 */
	abstract public function toTimeString(
	):string;

	/**
	 * Format the instance as date and time
	 */
	abstract public function toDateTimeString(
	):string;

	/**
	 * Format the instance with day, date and time
	 */
	abstract public function toDayDateTimeString(
	):string;

	/**
	 * Format the instance as ATOM
	 */
	abstract public function toAtomString(
	):string;

	/**
	 * Format the instance as COOKIE
	 */
	abstract public function toCookieString(
	):string;

	/**
	 * Format the instance as ISO8601
	 */
	abstract public function toIso8601String(
	):string;

	/**
	 * Format the instance as RFC822
	 */
	abstract public function toRfc822String(
	):string;

	/**
	 * Convert the instance to UTC and return as Zulu ISO8601
	 */
	abstract public function toIso8601ZuluString(
	):string;

	/**
	 * Format the instance as RFC850
	 */
	abstract public function toRfc850String(
	):string;

	/**
	 * Format the instance as RFC1036
	 */
	abstract public function toRfc1036String(
	):string;

	/**
	 * Format the instance as RFC1123
	 */
	abstract public function toRfc1123String(
	):string;

	/**
	 * Format the instance as RFC2822
	 */
	abstract public function toRfc2822String(
	):string;

	/**
	 * Format the instance as RFC3339
	 */
	abstract public function toRfc3339String(
	):string;

	/**
	 * Format the instance as RSS
	 */
	abstract public function toRssString(
	):string;

	/**
	 * Format the instance as W3C
	 */
	abstract public function toW3cString(
	):string;

	/**
	 * Format the instance as RFC7231
	 */
	abstract public function toRfc7231String(
	):string;

	/**
	 * Get default array representation
	 */
	abstract public function toArray(
	):array;

	/**
	 * Determines if the instance is equal to another
	 */
	abstract public function eq(
		 $date
	):bool;

	/**
	 * Determines if the instance is equal to another
	 */
	abstract public function equalTo(
		 $date
	):bool;

	/**
	 * Determines if the instance is not equal to another
	 */
	abstract public function ne(
		 $date
	):bool;

	/**
	 * Determines if the instance is not equal to another
	 */
	abstract public function notEqualTo(
		 $date
	):bool;

	/**
	 * Determines if the instance is greater (after) than another
	 */
	abstract public function gt(
		 $date
	):bool;

	/**
	 * Determines if the instance is greater (after) than another
	 */
	abstract public function greaterThan(
		 $date
	):bool;

	/**
	 * Determines if the instance is greater (after) than or equal to another
	 */
	abstract public function gte(
		 $date
	):bool;

	/**
	 * Determines if the instance is greater (after) than or equal to another
	 */
	abstract public function greaterThanOrEqualTo(
		 $date
	):bool;

	/**
	 * Determines if the instance is less (before) than another
	 */
	abstract public function lt(
		 $date
	):bool;

	/**
	 * Determines if the instance is less (before) than another
	 */
	abstract public function lessThan(
		 $date
	):bool;

	/**
	 * Determines if the instance is less (before) or equal to another
	 */
	abstract public function lte(
		 $date
	):bool;

	/**
	 * Determines if the instance is less (before) or equal to another
	 */
	abstract public function lessThanOrEqualTo(
		 $date
	):bool;

	/**
	 * Determines if the instance is between two others
	 */
	abstract public function between(
		 $date1, 
		 $date2, 
		bool $equal = true
	):bool;

	/**
	 * Get the closest date from the instance.
	 */
	abstract public function closest(
		 $date1, 
		 $date2
	):Carbon;

	/**
	 * Get the farthest date from the instance.
	 */
	abstract public function farthest(
		 $date1, 
		 $date2
	):Carbon;

	/**
	 * Get the minimum instance between a given instance (default now) and the current instance.
	 */
	abstract public function min(
		 $date = null
	):Carbon;

	/**
	 * Get the minimum instance between a given instance (default now) and the current instance.
	 */
	abstract public function minimum(
		 $date = null
	):Carbon;

	/**
	 * Get the maximum instance between a given instance (default now) and the current instance.
	 */
	abstract public function max(
		 $date = null
	):Carbon;

	/**
	 * Get the maximum instance between a given instance (default now) and the current instance.
	 */
	abstract public function maximum(
		 $date = null
	):Carbon;

	/**
	 * Determines if the instance is a weekday
	 */
	abstract public function isWeekday(
	):bool;

	/**
	 * Determines if the instance is a weekend day
	 */
	abstract public function isWeekend(
	):bool;

	/**
	 * Determines if the instance is yesterday
	 */
	abstract public function isYesterday(
	):bool;

	/**
	 * Determines if the instance is today
	 */
	abstract public function isToday(
	):bool;

	/**
	 * Determines if the instance is tomorrow
	 */
	abstract public function isTomorrow(
	):bool;

	/**
	 * Determines if the instance is within the next week
	 */
	abstract public function isNextWeek(
	):bool;

	/**
	 * Determines if the instance is within the last week
	 */
	abstract public function isLastWeek(
	):bool;

	/**
	 * Determines if the instance is within the next quarter
	 */
	abstract public function isNextQuarter(
	):bool;

	/**
	 * Determines if the instance is within the last quarter
	 */
	abstract public function isLastQuarter(
	):bool;

	/**
	 * Determines if the instance is within the next month
	 */
	abstract public function isNextMonth(
	):bool;

	/**
	 * Determines if the instance is within the last month
	 */
	abstract public function isLastMonth(
	):bool;

	/**
	 * Determines if the instance is within next year
	 */
	abstract public function isNextYear(
	):bool;

	/**
	 * Determines if the instance is within the previous year
	 */
	abstract public function isLastYear(
	):bool;

	/**
	 * Determines if the instance is in the future, ie. greater (after) than now
	 */
	abstract public function isFuture(
	):bool;

	/**
	 * Determines if the instance is in the past, ie. less (before) than now
	 */
	abstract public function isPast(
	):bool;

	/**
	 * Determines if the instance is a leap year
	 */
	abstract public function isLeapYear(
	):bool;

	/**
	 * Determines if the instance is a long year
	 */
	abstract public function isLongYear(
	):bool;

	/**
	 * Compares the formatted values of the two dates.
	 */
	abstract public function isSameAs(
		string $format, 
		 $date = null
	):bool;

	/**
	 * Determines if the instance is in the current year
	 */
	abstract public function isCurrentYear(
	):bool;

	/**
	 * Checks if the passed in date is in the same year as the instance year.
	 */
	abstract public function isSameYear(
		 $date = null
	):bool;

	/**
	 * Determines if the instance is in the current month
	 */
	abstract public function isCurrentQuarter(
	):bool;

	/**
	 * Checks if the passed in date is in the same quarter as the instance quarter (and year if needed).
	 */
	abstract public function isSameQuarter(
		 $date = null, 
		bool $ofSameYear = false
	):bool;

	/**
	 * Determines if the instance is in the current month
	 */
	abstract public function isCurrentMonth(
	):bool;

	/**
	 * Checks if the passed in date is in the same month as the instance month (and year if needed).
	 */
	abstract public function isSameMonth(
		 $date = null, 
		bool $ofSameYear = false
	):bool;

	/**
	 * Checks if the passed in date is the same day as the instance current day.
	 */
	abstract public function isSameDay(
		 $date
	):bool;

	/**
	 * Checks if this day is a specific day of the week.
	 */
	abstract public function isDayOfWeek(
		int $dayOfWeek
	):bool;

	/**
	 * Checks if this day is a Sunday.
	 */
	abstract public function isSunday(
	):bool;

	/**
	 * Checks if this day is a Monday.
	 */
	abstract public function isMonday(
	):bool;

	/**
	 * Checks if this day is a Tuesday.
	 */
	abstract public function isTuesday(
	):bool;

	/**
	 * Checks if this day is a Wednesday.
	 */
	abstract public function isWednesday(
	):bool;

	/**
	 * Checks if this day is a Thursday.
	 */
	abstract public function isThursday(
	):bool;

	/**
	 * Checks if this day is a Friday.
	 */
	abstract public function isFriday(
	):bool;

	/**
	 * Checks if this day is a Saturday.
	 */
	abstract public function isSaturday(
	):bool;

	/**
	 * Check if its the birthday. Compares the date/month values of the two dates.
	 */
	abstract public function isBirthday(
		 $date = null
	):bool;

	/**
	 * Check if today is the last day of the Month
	 */
	abstract public function isLastOfMonth(
	):bool;

	/**
	 * Checks if the (date)time string is in a given format.
	 */
	abstract public static function hasFormat(
		string $date, 
		string $format
	):bool;

	/**
	 * Add centuries to the instance. Positive $value travels forward while
negative $value travels into the past.
	 */
	abstract public function addCenturies(
		int $value
	):Carbon;

	/**
	 * Add a century to the instance
	 */
	abstract public function addCentury(
		int $value = 1
	):Carbon;

	/**
	 * Remove centuries from the instance
	 */
	abstract public function subCenturies(
		int $value
	):Carbon;

	/**
	 * Remove a century from the instance
	 */
	abstract public function subCentury(
		int $value = 1
	):Carbon;

	/**
	 * Add years to the instance. Positive $value travel forward while
negative $value travel into the past.
	 */
	abstract public function addYears(
		int $value
	):Carbon;

	/**
	 * Add a year to the instance
	 */
	abstract public function addYear(
		int $value = 1
	):Carbon;

	/**
	 * Add years to the instance with no overflow of months
Positive $value travel forward while
negative $value travel into the past.
	 */
	abstract public function addYearsNoOverflow(
		int $value
	):Carbon;

	/**
	 * Add year with overflow months set to false
	 */
	abstract public function addYearNoOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Add years to the instance.
	 */
	abstract public function addYearsWithOverflow(
		int $value
	):Carbon;

	/**
	 * Add year with overflow.
	 */
	abstract public function addYearWithOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Remove years from the instance.
	 */
	abstract public function subYears(
		int $value
	):Carbon;

	/**
	 * Remove a year from the instance
	 */
	abstract public function subYear(
		int $value = 1
	):Carbon;

	/**
	 * Remove years from the instance with no month overflow.
	 */
	abstract public function subYearsNoOverflow(
		int $value
	):Carbon;

	/**
	 * Remove year from the instance with no month overflow
	 */
	abstract public function subYearNoOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Remove years from the instance.
	 */
	abstract public function subYearsWithOverflow(
		int $value
	):Carbon;

	/**
	 * Remove year from the instance.
	 */
	abstract public function subYearWithOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Add quarters to the instance. Positive $value travels forward while
negative $value travels into the past.
	 */
	abstract public function addQuarters(
		int $value
	):Carbon;

	/**
	 * Add a quarter to the instance
	 */
	abstract public function addQuarter(
		int $value = 1
	):Carbon;

	/**
	 * Remove quarters from the instance
	 */
	abstract public function subQuarters(
		int $value
	):Carbon;

	/**
	 * Remove a quarter from the instance
	 */
	abstract public function subQuarter(
		int $value = 1
	):Carbon;

	/**
	 * Add months to the instance. Positive $value travels forward while
negative $value travels into the past.
	 */
	abstract public function addMonths(
		int $value
	):Carbon;

	/**
	 * Add a month to the instance
	 */
	abstract public function addMonth(
		int $value = 1
	):Carbon;

	/**
	 * Remove months from the instance
	 */
	abstract public function subMonths(
		int $value
	):Carbon;

	/**
	 * Remove a month from the instance
	 */
	abstract public function subMonth(
		int $value = 1
	):Carbon;

	/**
	 * Add months to the instance. Positive $value travels forward while
negative $value travels into the past.
	 */
	abstract public function addMonthsWithOverflow(
		int $value
	):Carbon;

	/**
	 * Add a month to the instance
	 */
	abstract public function addMonthWithOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Remove months from the instance
	 */
	abstract public function subMonthsWithOverflow(
		int $value
	):Carbon;

	/**
	 * Remove a month from the instance
	 */
	abstract public function subMonthWithOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Add months without overflowing to the instance. Positive $value
travels forward while negative $value travels into the past.
	 */
	abstract public function addMonthsNoOverflow(
		int $value
	):Carbon;

	/**
	 * Add a month with no overflow to the instance
	 */
	abstract public function addMonthNoOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Remove months with no overflow from the instance
	 */
	abstract public function subMonthsNoOverflow(
		int $value
	):Carbon;

	/**
	 * Remove a month with no overflow from the instance
	 */
	abstract public function subMonthNoOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Add days to the instance. Positive $value travels forward while
negative $value travels into the past.
	 */
	abstract public function addDays(
		int $value
	):Carbon;

	/**
	 * Add a day to the instance
	 */
	abstract public function addDay(
		int $value = 1
	):Carbon;

	/**
	 * Remove days from the instance
	 */
	abstract public function subDays(
		int $value
	):Carbon;

	/**
	 * Remove a day from the instance
	 */
	abstract public function subDay(
		int $value = 1
	):Carbon;

	/**
	 * Add weekdays to the instance. Positive $value travels forward while
negative $value travels into the past.
	 */
	abstract public function addWeekdays(
		int $value
	):Carbon;

	/**
	 * Add a weekday to the instance
	 */
	abstract public function addWeekday(
		int $value = 1
	):Carbon;

	/**
	 * Remove weekdays from the instance
	 */
	abstract public function subWeekdays(
		int $value
	):Carbon;

	/**
	 * Remove a weekday from the instance
	 */
	abstract public function subWeekday(
		int $value = 1
	):Carbon;

	/**
	 * Add weeks to the instance. Positive $value travels forward while
negative $value travels into the past.
	 */
	abstract public function addWeeks(
		int $value
	):Carbon;

	/**
	 * Add a week to the instance
	 */
	abstract public function addWeek(
		int $value = 1
	):Carbon;

	/**
	 * Remove weeks to the instance
	 */
	abstract public function subWeeks(
		int $value
	):Carbon;

	/**
	 * Remove a week from the instance
	 */
	abstract public function subWeek(
		int $value = 1
	):Carbon;

	/**
	 * Add hours to the instance. Positive $value travels forward while
negative $value travels into the past.
	 */
	abstract public function addHours(
		int $value
	):Carbon;

	/**
	 * Add hours to the instance using timestamp. Positive $value travels
forward while negative $value travels into the past.
	 */
	abstract public function addRealHours(
		int $value
	):Carbon;

	/**
	 * Add an hour to the instance.
	 */
	abstract public function addHour(
		int $value = 1
	):Carbon;

	/**
	 * Add an hour to the instance using timestamp.
	 */
	abstract public function addRealHour(
		int $value = 1
	):Carbon;

	/**
	 * Remove hours from the instance.
	 */
	abstract public function subHours(
		int $value
	):Carbon;

	/**
	 * Remove hours from the instance using timestamp.
	 */
	abstract public function subRealHours(
		int $value
	):Carbon;

	/**
	 * Remove an hour from the instance.
	 */
	abstract public function subHour(
		int $value = 1
	):Carbon;

	/**
	 * Remove an hour from the instance.
	 */
	abstract public function subRealHour(
		int $value = 1
	):Carbon;

	/**
	 * Add minutes to the instance using timestamp. Positive $value
travels forward while negative $value travels into the past.
	 */
	abstract public function addMinutes(
		int $value
	):Carbon;

	/**
	 * Add minutes to the instance using timestamp. Positive $value travels
forward while negative $value travels into the past.
	 */
	abstract public function addRealMinutes(
		int $value
	):Carbon;

	/**
	 * Add a minute to the instance.
	 */
	abstract public function addMinute(
		int $value = 1
	):Carbon;

	/**
	 * Add a minute to the instance using timestamp.
	 */
	abstract public function addRealMinute(
		int $value = 1
	):Carbon;

	/**
	 * Remove a minute from the instance.
	 */
	abstract public function subMinute(
		int $value = 1
	):Carbon;

	/**
	 * Remove a minute from the instance using timestamp.
	 */
	abstract public function subRealMinute(
		int $value = 1
	):Carbon;

	/**
	 * Remove minutes from the instance.
	 */
	abstract public function subMinutes(
		int $value
	):Carbon;

	/**
	 * Remove a minute from the instance using timestamp.
	 */
	abstract public function subRealMinutes(
		int $value = 1
	):Carbon;

	/**
	 * Add seconds to the instance. Positive $value travels forward while
negative $value travels into the past.
	 */
	abstract public function addSeconds(
		int $value
	):Carbon;

	/**
	 * Add seconds to the instance using timestamp. Positive $value travels
forward while negative $value travels into the past.
	 */
	abstract public function addRealSeconds(
		int $value
	):Carbon;

	/**
	 * Add a second to the instance.
	 */
	abstract public function addSecond(
		int $value = 1
	):Carbon;

	/**
	 * Add a second to the instance using timestamp.
	 */
	abstract public function addRealSecond(
		int $value = 1
	):Carbon;

	/**
	 * Remove seconds from the instance.
	 */
	abstract public function subSeconds(
		int $value
	):Carbon;

	/**
	 * Remove seconds from the instance using timestamp.
	 */
	abstract public function subRealSeconds(
		int $value
	):Carbon;

	/**
	 * Remove a second from the instance
	 */
	abstract public function subSecond(
		int $value = 1
	):Carbon;

	/**
	 * Remove a second from the instance using timestamp.
	 */
	abstract public function subRealSecond(
		int $value = 1
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
	 * Get the difference in weekdays
	 */
	abstract public function diffInWeekdays(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in weekend days using a filter
	 */
	abstract public function diffInWeekendDays(
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
	 * Get the difference in hours using timestamps.
	 */
	abstract public function diffInRealHours(
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

	/**
	 * Get the difference in minutes using timestamps.
	 */
	abstract public function diffInRealMinutes(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in seconds.
	 */
	abstract public function diffInSeconds(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in seconds using timestamps.
	 */
	abstract public function diffInRealSeconds(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * The number of seconds since midnight.
	 */
	abstract public function secondsSinceMidnight(
	):int;

	/**
	 * The number of seconds until 23:59:59.
	 */
	abstract public function secondsUntilEndOfDay(
	):int;

	/**
	 * Get the difference in a human readable format in the current locale.
	 */
	abstract public function diffForHumans(
		Carbon $other = null, 
		bool $absolute = false, 
		bool $short = false, 
		int $parts = 1
	):string;

	/**
	 * Resets the time to 00:00:00 start of day
	 */
	abstract public function startOfDay(
	):Carbon;

	/**
	 * Resets the time to 23:59:59 end of day
	 */
	abstract public function endOfDay(
	):Carbon;

	/**
	 * Resets the date to the first day of the month and the time to 00:00:00
	 */
	abstract public function startOfMonth(
	):Carbon;

	/**
	 * Resets the date to end of the month and time to 23:59:59
	 */
	abstract public function endOfMonth(
	):Carbon;

	/**
	 * Resets the date to the first day of the quarter and the time to 00:00:00
	 */
	abstract public function startOfQuarter(
	):Carbon;

	/**
	 * Resets the date to end of the quarter and time to 23:59:59
	 */
	abstract public function endOfQuarter(
	):Carbon;

	/**
	 * Resets the date to the first day of the year and the time to 00:00:00
	 */
	abstract public function startOfYear(
	):Carbon;

	/**
	 * Resets the date to end of the year and time to 23:59:59
	 */
	abstract public function endOfYear(
	):Carbon;

	/**
	 * Resets the date to the first day of the decade and the time to 00:00:00
	 */
	abstract public function startOfDecade(
	):Carbon;

	/**
	 * Resets the date to end of the decade and time to 23:59:59
	 */
	abstract public function endOfDecade(
	):Carbon;

	/**
	 * Resets the date to the first day of the century and the time to 00:00:00
	 */
	abstract public function startOfCentury(
	):Carbon;

	/**
	 * Resets the date to end of the century and time to 23:59:59
	 */
	abstract public function endOfCentury(
	):Carbon;

	/**
	 * Resets the date to the first day of week (defined in $weekStartsAt) and the time to 00:00:00
	 */
	abstract public function startOfWeek(
	):Carbon;

	/**
	 * Resets the date to end of week (defined in $weekEndsAt) and time to 23:59:59
	 */
	abstract public function endOfWeek(
	):Carbon;

	/**
	 * Modify to start of current hour, minutes and seconds become 0
	 */
	abstract public function startOfHour(
	):Carbon;

	/**
	 * Modify to end of current hour, minutes and seconds become 59
	 */
	abstract public function endOfHour(
	):Carbon;

	/**
	 * Modify to start of current minute, seconds become 0
	 */
	abstract public function startOfMinute(
	):Carbon;

	/**
	 * Modify to end of current minute, seconds become 59
	 */
	abstract public function endOfMinute(
	):Carbon;

	/**
	 * Modify to midday, default to self::$midDayAt
	 */
	abstract public function midDay(
	):Carbon;

	/**
	 * Modify to the next occurrence of a given day of the week.
	 */
	abstract public function next(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Go forward to the next weekday.
	 */
	abstract public function nextWeekday(
	):Carbon;

	/**
	 * Go backward to the previous weekday.
	 */
	abstract public function previousWeekday(
	):Carbon;

	/**
	 * Go forward to the next weekend day.
	 */
	abstract public function nextWeekendDay(
	):Carbon;

	/**
	 * Go backward to the previous weekend day.
	 */
	abstract public function previousWeekendDay(
	):Carbon;

	/**
	 * Modify to the previous occurrence of a given day of the week.
	 */
	abstract public function previous(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the first occurrence of a given day of the week
in the current month. If no dayOfWeek is provided, modify to the
first day of the current month.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function firstOfMonth(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the last occurrence of a given day of the week
in the current month. If no dayOfWeek is provided, modify to the
last day of the current month.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function lastOfMonth(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the given occurrence of a given day of the week
in the current month. If the calculated occurrence is outside the scope
of the current month, then return false and no modifications are made.
	 */
	abstract public function nthOfMonth(
		int $nth, 
		int $dayOfWeek
	);

	/**
	 * Modify to the first occurrence of a given day of the week
in the current quarter. If no dayOfWeek is provided, modify to the
first day of the current quarter.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function firstOfQuarter(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the last occurrence of a given day of the week
in the current quarter. If no dayOfWeek is provided, modify to the
last day of the current quarter.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function lastOfQuarter(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the given occurrence of a given day of the week
in the current quarter. If the calculated occurrence is outside the scope
of the current quarter, then return false and no modifications are made.
	 */
	abstract public function nthOfQuarter(
		int $nth, 
		int $dayOfWeek
	);

	/**
	 * Modify to the first occurrence of a given day of the week
in the current year. If no dayOfWeek is provided, modify to the
first day of the current year.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function firstOfYear(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the last occurrence of a given day of the week
in the current year. If no dayOfWeek is provided, modify to the
last day of the current year.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function lastOfYear(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the given occurrence of a given day of the week
in the current year. If the calculated occurrence is outside the scope
of the current year, then return false and no modifications are made.
	 */
	abstract public function nthOfYear(
		int $nth, 
		int $dayOfWeek
	);

	/**
	 * Modify the current instance to the average of a given instance (default now) and the current instance.
	 */
	abstract public function average(
		 $date = null
	):Carbon;

	/**
	 * Return a serialized string of the instance.
	 */
	abstract public function serialize(
	):string;

	/**
	 * Create an instance from a serialized string.
	 */
	abstract public static function fromSerialized(
		string $value
	):Carbon;

	/**
	 * Prepare the object for JSON serialization.
	 */
	abstract public function jsonSerialize(
	);

	/**
	 * JSON serialize all Carbon instances using the given callback.
	 */
	abstract public static function serializeUsing(
		callable $callback
	);

	/**
	 * Register a custom macro.
	 */
	abstract public static function macro(
		string $name, 
		 $macro
	);

	/**
	 * Checks if macro is registered.
	 */
	abstract public static function hasMacro(
		string $name
	):bool;

}