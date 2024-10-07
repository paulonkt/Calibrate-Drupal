<?php
namespace Drupal\country_import\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\node\Entity\Node;
use Drupal\Core\Database\Database;

class CountryFilterForm extends FormBase {
	/**
	 * {@inheritdoc}
	 */
	public function getFormId() {
		return 'country_filter_form';
	}

	/**
	 * {@inheritdoc}
	 */
	public function buildForm(array $form, FormStateInterface $form_state) {
		$form['country'] = [
			'#type' => 'select',
			'#title' => $this->t('Country'),
			'#options' => $this->getCountryOptions(),
			'#ajax' => [
				'callback' => '::ajaxRefresh',
				'wrapper' => 'offices-list',
			],
		];

		$form['offices_list'] = [
			'#type' => 'markup',
			'#prefix' => '<div id="offices-list">',
			'#suffix' => '</div>',
			#'#markup' => $this->t(''),
		];

		$form['#attached']['library'][] = 'country_import/country_filter';

		return $form;
	}

	/**
	 * Ajax callback to refresh the office list.
	 */
	public function ajaxRefresh(array &$form) {
		return $form['offices_list'];
	}

	/**
	 * Get available countries.
	 */
	protected function getCountryOptions() {
		$countries = [];
		
		// TODO: Filter by countries used only
		$query = \Drupal::database()->select('countries', 'c')
			->fields('c', ['id', 'name'])
			->execute();
		
		foreach ($query as $record) {
			$countries[$record->id] = $record->name;
		}

		return $countries;
	}

	/**
	 * {@inheritdoc}
	 */
	public function submitForm(array &$form, FormStateInterface $form_state) {
		
	}
}
