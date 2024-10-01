<?php

namespace Drupal\my_services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class AlertsController extends ControllerBase {

  
  public function alertsDemo() {
    
    $this->messenger()->addStatus('This is a status message.');
    $this->messenger()->addWarning('This is a warning message.');
    $this->messenger()->addError('This is an error message.');

    
    return [
      '#type' => 'markup',
      '#markup' => 'This is the page content.',
    ];
  }

  
  public function alertWithType($type) {
    switch ($type) {
      case 'status':
        $this->messenger()->addStatus('I\'m a status alert');
        break;

      case 'warning':
        $this->messenger()->addWarning('I\'m a warning alert');
        break;

      case 'error':
        $this->messenger()->addError('I\'m an error alert');
        break;

      default:
        $this->messenger()->addError('Invalid alert type');
        break;
    }

    return [
      '#type' => 'markup',
      '#markup' => 'This is the page content.',
    ];
  }
}
