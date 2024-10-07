<?php
namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns a simple "Hello World" page.
 */
class HelloWorldController extends ControllerBase {

  /**
   * Displays the "Hello World" page.
   *
   * @return array
   *   A render array containing the page content.
   */
  public function helloWorld() {
    return [
      '#markup' => $this->t('Hello World! This is our hello world controller for Calibrate challenge.'),
    ];
  }

}
