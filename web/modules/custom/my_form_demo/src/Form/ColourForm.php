<?php

namespace Drupal\my_form_demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class ColourForm extends FormBase {

  public function getFormId() {
    return 'colour_form';
  }


  public function buildForm(array $form, FormStateInterface $form_state) {
   
    $submitted_colour = $form_state->get('submitted_colour');
    
    $form['colour'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Favourite Colour'),
      '#description' => $this->t('Accepted colours are red, green, and blue.'),
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    ];

    
    if ($submitted_colour) {
      $form['submitted_colour_message'] = [
        '#markup' => $this->t('Your favourite colour is: @colour', ['@colour' => htmlspecialchars($submitted_colour)]),
        '#prefix' => '<p><strong>Favourite Colour✩</strong></p>',
      ];
    }

    return $form;
  }


  public function validateForm(array &$form, FormStateInterface $form_state) {
    $colour = $form_state->getValue('colour');
    $accepted_colours = ['red', 'green', 'blue'];

    if (!in_array(strtolower($colour), $accepted_colours)) {
      $form_state->setErrorByName('colour', $this->t('The colour %colour is not accepted. Please enter red, green, or blue.', ['%colour' => $colour]));
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $colour = $form_state->getValue('colour');
   
    $form_state->set('submitted_colour', $colour);
    
    $form_state->setRebuild();
  }

}
