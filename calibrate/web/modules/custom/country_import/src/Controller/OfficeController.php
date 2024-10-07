<?php
namespace Drupal\country_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

class OfficeController extends ControllerBase {
	public function officeList() {
		$build = [];

		$country_filter = \Drupal::request()->query->get('country');

		$query = \Drupal::entityQuery('node')
			->condition('type', 'office')
			->accessCheck(TRUE);

		if ($country_filter) {
			$query->condition('field_office_country', $country_filter);
		}

		$office_ids = $query->execute();
		$offices = Node::loadMultiple($office_ids);

		foreach ($offices as $office) {
			$build['offices'][] = [
				'#theme' => 'office_item',
				'#office' => $office,
			];
		}

		$build['country_filter'] = \Drupal::formBuilder()->getForm('Drupal\country_import\Form\CountryFilterForm');

		return $build;
	}
}
