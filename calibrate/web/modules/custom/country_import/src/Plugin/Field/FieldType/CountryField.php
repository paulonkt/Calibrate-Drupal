<?php
namespace Drupal\country_import\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\Field\FieldStorageConfigInterface;

/**
 * Provides a 'country' field type.
 *
 * @FieldType(
 *   id = "country",
 *   label = @Translation("Country"),
 *   description = @Translation("A field to select a country."),
 *   default_widget = "country_select",
 *   default_formatter = "country_label"
 * )
 */
class CountryField extends FieldItemBase {

	/**
	 * {@inheritdoc}
	 */
	public static function schema(FieldStorageDefinitionInterface $field_storage_definition) {
		return [
			'columns' => [
				"target_id" => [
					'type' => 'int',
					'not null' => FALSE,
					'description' => 'Country ID.',
				],
			],
			'indexes' => [
				"target_id" => ["target_id"],
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function isEmpty() {
		return empty($this->get('target_id')->getValue());
	}

	/**
	 * {@inheritdoc}
	 */
	public static function propertyDefinitions(FieldStorageDefinitionInterface $field_storage_definition) {
		$properties['target_id'] = DataDefinition::create('integer')
			->setLabel(t('Country ID'))
			->setRequired(TRUE);

		return $properties;
	}

}
