<?php

namespace Drupal\my_form_demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class DemoElementForm extends FormBase {

 
  public function getFormId() {
    return 'demo_element_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {

    
    $form['distance'] = [
      '#type' => 'number',
      '#title' => $this->t('Distance (m)'),
      '#description' => $this->t('Enter the travel distance.'),
      '#required' => TRUE,
    ];

    
    $form['password'] = [
      '#type' => 'password',
      '#title' => $this->t('Password'),
    ];

   
    $options = [
      'red' => $this->t('Red'), 
      'green' => $this->t('Green'),
      'blue' => $this->t('Blue'),
    ];

    
    $form['colours'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Colour selection'),
    ];

    
    $form['colours']['primary_colour'] = [
      '#type' => 'radios',
      '#title' => $this->t('Primary colour'),
      '#options' => $options,
      '#description' => $this->t('Please choose a primary colour.'),
    ];

    
    $form['colours']['secondary_colour'] = [
      '#type' => 'select',
      '#title' => $this->t('Secondary Colour'),
      '#options' => $options,
      '#description' => $this->t('Please choose a secondary colour.'),
    ];

    
    $form['colours']['bonus_colours'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Bonus colours'),
      '#options' => [
        'yellow' => $this->t('Yellow'),
        'pink' => $this->t('Pink'),
      ],
      '#description' => $this->t('Please choose bonus colours (if applicable).'),
    ];

    
    $form['personal_info'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Personal info'),
    ];

    
    $form['personal_info']['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Your name'),
      '#default_value' => 'Michael aree',
    ];

    
    $form['personal_info']['feedback'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Your feedback'),
      '#placeholder' => $this->t('Feedback goes here.'),
    ];

   
    $form['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    ];

    return $form;
  }

 
  public function submitForm(array &$form, FormStateInterface $form_state) {
    
    \Drupal::messenger()->addMessage($this->t('Form submitted successfully.'));
  }
}
