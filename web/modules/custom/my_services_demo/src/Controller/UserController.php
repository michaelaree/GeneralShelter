<?php

namespace Drupal\my_services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class UserController extends ControllerBase {
  public function currentUserDemo() {
    
    $current_user = \Drupal::currentUser();
    
    $display_name = $current_user->getDisplayName();
   
    return [
      '#markup' => $this->t('Hello, @name', ['@name' => $display_name]),
    ];
  }
}
