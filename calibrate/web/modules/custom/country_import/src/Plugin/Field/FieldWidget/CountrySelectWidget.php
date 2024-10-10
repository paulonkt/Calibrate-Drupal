<?php
namespace Drupal\country_import\Plugin\Field\FieldWidget;

use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'country_select' widget.
 *
 * @FieldWidget(
 *   id = "country_select",
 *   label = @Translation("Country select"),
 *   field_types = {
 *     "country"
 *   }
 * )
 */
class CountrySelectWidget extends WidgetBase {

	/**
	 * {@inheritdoc}
	 */
	public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
		$query = \Drupal::database()->select('countries', 'c')
			->fields('c', ['id', 'name'])
			->orderBy('name', 'ASC')
			->execute();
		$countries = $query->fetchAllAssoc('id');

		$options = [];
		foreach ($countries as $country) {
			$options[$country->id] = $country->name;
		}

		$element['target_id'] = [
			'#type' => 'select',
			'#options' => $options,
			'#default_value' => isset($items[$delta]->target_id) ? $items[$delta]->target_id : NULL,
			'#empty_option' => $this->t('Select a country'),
			'#title' => $this->t('Country'),
		];

		return $element;
	}
}
