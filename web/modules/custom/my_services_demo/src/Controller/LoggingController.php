<?php

namespace Drupal\my_services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class LoggingController extends ControllerBase {

 
  public function loggingDemo() {
   
    \Drupal::logger('my_services_demo')->emergency('Emergency message from my_services_demo.');
    \Drupal::logger('my_services_demo')->alert('Alert message from my_services_demo.');
    \Drupal::logger('my_services_demo')->critical('Critical message from my_services_demo.');
    \Drupal::logger('my_services_demo')->error('Error message from my_services_demo.');
    \Drupal::logger('my_services_demo')->warning('Warning message from my_services_demo.');
    \Drupal::logger('my_services_demo')->notice('Notice message from my_services_demo.');
    \Drupal::logger('my_services_demo')->info('Info message from my_services_demo.');
    \Drupal::logger('my_services_demo')->debug('Debug message from my_services_demo.');

    
    return [
      '#type' => 'markup',
      '#markup' => 'Log entries have been generated.',
    ];
  }
}

