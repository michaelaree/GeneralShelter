<?php

namespace Drupal\description\Controller;

use Drupal\Core\Controller\ControllerBase;


class MyController extends ControllerBase {

    public function productDescription($name, $size = 'M', $colour = 'white') {
        return [
          '#markup' => $this->t('Product: @name, Size: @size, Colour: @colour', [
            '@name' => $name,
            '@size' => $size,
            '@colour' => $colour,
          ]),
        ];
      }
}
