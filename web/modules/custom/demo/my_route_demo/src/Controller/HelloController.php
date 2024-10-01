<?php

namespace Drupal\my_route_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

  public function hello() {
    return [
      '#markup' => 'Hello. It is a fine day indeed!',
    ];
  }

 
  public function helloName($first_name, $last_name = '') {
    return [
      '#markup' => $this->t('Hi, @first_name @last_name!', [
        '@first_name' => $first_name,
        '@last_name' => $last_name,
      ]),
    ];
  }

 
  public function goodbye($name) {
    return [
      '#markup' => $this->t('Goodbye, @name!', [
        '@name' => $name,
      ]),
    ];
  }

  
  public function viewProduct($name, $size = 'M', $colour = 'white') {
    return [
      '#markup' => $this->t('Product: @name, Size: @size, Colour: @colour', [
        '@name' => $name,
        '@size' => $size,
        '@colour' => $colour,
      ]),
    ];
  }

 
  public function addition($num_1, $num_2) {
    $sum = $num_1 + $num_2;
    return [
      '#markup' => $this->t('The sum of @num_1 and @num_2 is @sum.', [
        '@num_1' => $num_1,
        '@num_2' => $num_2,
        '@sum' => $sum,
      ]),
    ];
  }

 
  public function codeValidation($code) {
    return [
      '#markup' => $this->t('The provided code is: @code.', [
        '@code' => $code,
      ]),
    ];
  }

}
