<?php
namespace Drupal\country_import\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

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
			'#options' => $this->getCountryOptions(),
			'#ajax' => [
				'callback' => '::ajaxRefresh',
				'wrapper' => 'offices-list',
			],
		];

		$form['offices_list'] = [
			#'#type' => 'markup',
			'#prefix' => '<div id="offices-list">',
			'#suffix' => '</div>',
			'view' => $this->getOfficesList($form_state->getValue('country')),
		];

		$form['#attached']['library'][] = 'country_import/country_filter';

		return $form;
	}

	public function ajaxRefresh(array &$form, FormStateInterface $form_state) {
		$country_id = (string) $form_state->getValue('country');
		
		if (is_array($country_id)) {
			$country_id = reset($country_id);
		}

		$response = new \Drupal\Core\Ajax\AjaxResponse();
		$response->addCommand(new \Drupal\Core\Ajax\ReplaceCommand('#offices-list', $form['offices_list']));
		return $response;
	}


	/**
	 * Get available countries.
	 */
	protected function getCountryOptions() {
		$countries = [];
		$countries[''] = $this->t('Country');

		$country_ids_query = \Drupal::database()->select('node__field_office_country', 'oc')
			->fields('oc', ['field_office_country_target_id'])
			->distinct()
			->execute();

		$country_ids = $country_ids_query->fetchCol();
		if (!empty($country_ids)) {
			$country_query = \Drupal::database()->select('countries', 'c')
				->fields('c', ['id', 'name'])
				->condition('c.id', $country_ids, 'IN')
				->orderBy('name', 'ASC')
				->execute();

			foreach ($country_query as $record) {
				$countries[$record->id] = $record->name;
			}
		}

		return $countries;
	}

	/**
	 * Get the list of offices for the selected country.
	 */
	protected function getOfficesList($country_id) {
		$view = \Drupal\views\Views::getView('office_search_dropdown');
		if ($view) {
			$view->setDisplay('default');

			if (!empty($country_id)) {
				$view->setArguments([$country_id]);
			} else {
				$view->setArguments([]);
			}

			return $view->render();
    }

    return $this->t('No offices available for this country.');
	}

	/**
	 * {@inheritdoc}
	 */
	public function submitForm(array &$form, FormStateInterface $form_state) {
		
	}
}
