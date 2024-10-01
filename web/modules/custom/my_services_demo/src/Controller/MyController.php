<?php

namespace Drupal\my_services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
// use Symfony\Component\HttpFoundation\Response;

class MyController extends ControllerBase {

//   public function currentUserEmail() {
    
  // $current_user = \Drupal::currentUser();
    
    
//     $email = \Drupal::entityTypeManager()
//       ->getStorage('user')
//       ->load($current_user->id())
//       ->getEmail();
    
   
//   //   return new Response($email);
//   // }





public function currentUserEmail() {
  // $current_user = \Drupal::currentUser();
  $current_user = $this->currentUser();
  $email = $current_user->getEmail();

  return [
    '#markup' => $this->t('Hello, @email', ['@email' => $email]),
  ];
}
}




