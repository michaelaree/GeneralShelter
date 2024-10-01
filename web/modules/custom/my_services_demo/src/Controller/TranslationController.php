<?php

namespace Drupal\my_services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class TranslationController extends ControllerBase {

  public function translationDemo() {
    $name = 'Michael aree';
    $page = 'IT and design education
for remote Africa';
    $url = 'https://www.learninglions.org/';

    $msg1 = $this->t('Hello @name, welcome to our website.', ['@name' => $name]);
    $msg2 = $this->t('Your page %page has been saved.', ['%page' => $page]);
    $msg3 = $this->t('Visit our page at <a href=":url">Our site</a>', [':url' => $url]);

    return [
      '#markup' => $msg1 . '<br>' . $msg2 . '<br>' . $msg3,
    ];
  }

  public function placeholdersDemo() {
    $unread = 7;
    $read = 10;

    $message = $this->t('You have @unread unread messages and @read read messages.', [
      '@unread' => $unread,
      '@read' => $read,
    ]);

    return [
      '#markup' => $message,
    ];
  }

}
