<?php
namespace Drupal\country_import\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'country_label' formatter.
 *
 * @FieldFormatter(
 *   id = "country_label",
 *   label = @Translation("Country label"),
 *   field_types = {
 *     "country"
 *   }
 * )
 */
class CountryLabelFormatter extends FormatterBase {

	/**
	 * {@inheritdoc}
	 */
	public function viewElements(FieldItemListInterface $items, $langcode) {
		$elements = [];
		foreach ($items as $delta => $item) {
			$country_id = $item->target_id;
			$country = \Drupal::database()->select('countries', 'c')
				->fields('c', ['name'])
				->condition('id', $country_id)
				->execute()
				->fetchField();
			
			$elements[$delta] = [
				'#markup' => $this->t('@country', ['@country' => $country]),
				'#allowed_tags' => ['strong', 'em'],
			];
		}
		return $elements;
	}
}
