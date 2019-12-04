<?php
namespace Plenty\Modules\ShopBuilder\Contracts;


/**
 * Contract for widgets with dynamic settings
 */
interface DynamicWidget 
{

	/**
	 * Get basic information about the widget. Possible fields are
- identifier
- label
- previewImageURL
- type
- categories
- position
	 */
	public function getData(
	):array;

	/**
	 * Return the structure of the settings for the widget
	 */
	public function getSettings(
	):array;

	/**
	 * Get the html representation of the widget
	 */
	public function getPreview(
		array $widgetSettings = [], 
		array $children = []
	):string;

	/**
	 * Render the widget
	 */
	public function render(
		array $widgetSettings = [], 
		array $children = []
	):string;

}