<?php
namespace Drupal\country_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Drupal\views\Views;

class OfficeController extends ControllerBase {

	public function officeList(Request $request) {
		$build = [];

		$country_filter = $request->query->get('country');

		$build['country_filter'] = \Drupal::formBuilder()->getForm('Drupal\country_import\Form\CountryFilterForm');

		$view = Views::getView('office_search_dropdown');
		if ($view) {
			$view->setDisplay('default');

			if ($country_filter) {
				$view->setArguments([$country_filter]);
			}

			$view->execute();

			$build['offices_list'] = $view->render();
		}

		return $build;
	}
}
