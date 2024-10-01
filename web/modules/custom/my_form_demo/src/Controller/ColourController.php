<?php

namespace Drupal\my_form_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Returns responses for Colour form routes.
 */
class ColourController extends ControllerBase {

  /**
   * Returns a response for the favourite colour page.
   */
  public function colourPage($favourite_colour) {
    return new Response(
      '<p>Your favourite colour is ' . htmlspecialchars($favourite_colour) . '.</p>'
    );
  }

}
