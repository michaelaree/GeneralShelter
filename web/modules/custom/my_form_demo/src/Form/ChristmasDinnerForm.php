<?php

namespace Drupal\my_form_demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class ChristmasDinnerForm extends FormBase {

 
  public function getFormId() {
    return 'christmas_dinner_form';
  }

 
  public function buildForm(array $form, FormStateInterface $form_state) {

   
    $form['first_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First Name'),
      '#required' => TRUE,
    ];

   
    $form['last_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Last Name'),
      '#required' => TRUE,
    ];

    
    $form['number_of_guests'] = [
      '#type' => 'select',
      '#title' => $this->t('Number of Guests'),
      '#options' => array_combine(range(1, 10), range(1, 10)),
      '#required' => TRUE,
    ];

   
    $form['meat_fish_choices'] = [
      '#type' => 'number',
      '#title' => $this->t('Number of Meat/Fish Choices'),
      '#min' => 0,
      '#required' => TRUE,
    ];

    
    $form['vegetarian_choices'] = [
      '#type' => 'number',
      '#title' => $this->t('Number of Vegetarian Choices'),
      '#min' => 0,
      '#required' => TRUE,
    ];

    
    $form['vegan_choices'] = [
      '#type' => 'number',
      '#title' => $this->t('Number of Vegan Choices'),
      '#min' => 0,
      '#required' => TRUE,
    ];

    
    $form['alcohol_free'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Would you like your table to be alcohol-free?'),
    ];

   
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

 
  public function submitForm(array &$form, FormStateInterface $form_state) {
    
    \Drupal::messenger()->addMessage($this->t('Thank you for your submission.'));
  }
}
