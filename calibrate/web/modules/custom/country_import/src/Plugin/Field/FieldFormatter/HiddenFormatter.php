<?php
namespace Drupal\country_import\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'hidden' formatter.
 *
 * @FieldFormatter(
 *   id = "hidden",
 *   label = @Translation("Hidden"),
 *   field_types = {
 *     "country"
 *   }
 * )
 */
class HiddenFormatter extends FormatterBase {

	/**
	 * {@inheritdoc}
	 */
	public function viewElements(FieldItemListInterface $items, $langcode) {
		// Do not render any output for this field.
		return [];
	}

}
