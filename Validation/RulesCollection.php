<?php
namespace Plenty\Validation;

use Plenty\Validation\Contracts\Attribute;
use Plenty\Validation\Contracts\AttributeHelperContract;

/**
 * RulesCollection
 */
abstract class RulesCollection 
{

	public function add(
		string $attributeName
	):Attribute
	{
		return new DummyAttribute();
	}

	public function addConditional(
		string $attributeName, 
		bool $required
	):Attribute
	{
		return new DummyAttribute();
	}

	public function addInt(
		string $attributeName, 
		bool $required = false
	):Attribute
	{
		return new DummyAttribute();
	}

	public function addNumeric(
		string $attributeName, 
		bool $required = false
	):Attribute
	{
		return new DummyAttribute();
	}

	public function addDate(
		string $attributeName, 
		bool $required = false
	):Attribute
	{
		return new DummyAttribute();
	}

	public function addBool(
		string $attributeName, 
		bool $required = false
	):Attribute
	{
		return new DummyAttribute();
	}

	public function addString(
		string $attributeName, 
		bool $required = false
	):Attribute
	{
		return new DummyAttribute();
	}

	/**
	 * Add a rule for an attribute based on the result of the condition callback.
	 */
	public function sometimes(
		string $attributeName, 
		callable $condition
	):Attribute
	{
		return new DummyAttribute();
	}

}