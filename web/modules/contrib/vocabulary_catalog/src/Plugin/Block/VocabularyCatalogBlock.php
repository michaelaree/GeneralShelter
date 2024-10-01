<?php

namespace Drupal\vocabulary_catalog\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
Use Drupal\taxonomy\Entity\Vocabulary;

/**
 * Provides a Block to display last visited pages you visited on the website.
 *
 * @Block(
 *   id = "vocabulary_catalog_block",
 *   admin_label = @Translation("Vocabulary Block")
 * )
 */
class VocabularyCatalogBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
      $this->configuration['vocabularies'] = [];
      $this->configuration['disabled_terms'] = false;
      $this->configuration['vocabulary_listing_style'] = '1';
      $this->configuration['terms_display_layout'] = '1';
      $this->configuration['wrapper_class'] = '';
      return ['label_display' => FALSE];
    }

    /**
     * {@inheritdoc}
     */
    public function build() {
      $content = array();
      $vocabularies = $this->configuration['vocabularies'];
      $active_vocabularies = array_keys(array_filter($vocabularies));

      $disabled_terms = $this->configuration['disabled_terms'];
      $vocabulary_listing_style = $this->configuration['vocabulary_listing_style'];
      $terms_display_layout = $this->configuration['terms_display_layout'];
      $wrapper_class = $this->configuration['wrapper_class'];
      $label_display = $this->configuration['label_display'];
      $block_label = '';

      if($label_display) {
        $block_label = $this->t($this->label());
      }

      $config_data = array(
        'active_vocabularies' => $active_vocabularies,
        'disabled_terms' => $disabled_terms,
        'terms_display_layout' => $terms_display_layout
      );

      $catalog_data = getVocabularyCatalog($config_data);

      $content['vocabulary_listing_style'] = $vocabulary_listing_style;
      $content['catalog_data'] = $catalog_data;
      $content['wrapper_class'] = $wrapper_class;
      $content['wrapper_class'] = $wrapper_class;
      $content['block_label'] = $block_label;

      $build = [];
      $build['vocabulary_catalog'] = [
        '#theme' => 'vocabulary_catalog_block',
        '#content' => $content,
      ];

      $build['#attached']['library'][] = 'vocabulary_catalog/vocabulary_catalog.frontend';
      return $build;
    }

    /**
     * {@inheritdoc}
     */
    public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
      $form = parent::buildConfigurationForm($form, $form_state);
      $config = $this->getConfiguration();

      // Get all vocabularies
      $vocabularies = Vocabulary::loadMultiple();
      $vocabulary_options = array();
      if($vocabularies) {
        foreach($vocabularies as $voc) {
          $vocabulary_options[$voc->id()] = $this->t($voc->label());
        }
      }

      $form['vocabularies'] = [
        '#type' => 'checkboxes',
        '#title' => $this->t('Active Vocabularies'),
        '#description' => $this->t('Select the available vocabulariess catalog.'),
        '#default_value' => $config['vocabularies']??[],
        '#options' => $vocabulary_options,
        '#required' => true,
        '#attributes' => ['class' => ['vocabularies']],
      ];

      $form['disabled_terms'] = [
        '#type' => 'checkbox',
        '#title' => $this->t('Show disabled terms'),
        '#description' => $this->t('Show disabled terms on the catalog. This options is useful for admin login.'),
        '#default_value' => $config['disabled_terms']??false,
        '#attributes' => ['class' => ['disabled-terms']],
      ];

      $form['vocabulary_listing_style'] = [
        '#type' => 'select',
        '#title' => $this->t('Vocabulary listing style'),
        '#description' => $this->t('Select the vocabulary listing style on the catalog.'),
        '#default_value' => $config['vocabulary_listing_style']??'1',
        '#options' => array(
          '' => $this->t('None'),
          '1' => $this->t('1) '),
          '2' => $this->t('1. '),
          '3' => $this->t('1 ')
        ),
        '#attributes' => ['class' => ['vocabulary-listing-style']],
      ];

      $form['terms_display_layout'] = [
        '#type' => 'radios',
        '#title' => $this->t('Terms display layout'),
        '#description' => $this->t('Select the terms display layout on the catalog.'),
        '#default_value' => $config['terms_display_layout']??'1',
        '#options' => array(
          '1' => $this->t('Parent child tree structure'),
          '2' => $this->t('Single child layout under vocabulary')
        ),
        '#required' => true,
        '#attributes' => ['class' => ['terms-display-layout']],
      ];

      $form['wrapper_class'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Wrapper class'),
        '#description' => $this->t('Custom class for the listing wrapper'),
        '#default_value' => $config['wrapper_class']??'',
        '#attributes' => ['class' => ['listing-calss']],
      ];

      return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
      $this->configuration['vocabularies'] = $form_state->getValue('vocabularies');
      $this->configuration['disabled_terms'] = $form_state->getValue('disabled_terms');
      $this->configuration['vocabulary_listing_style'] = $form_state->getValue('vocabulary_listing_style');
      $this->configuration['terms_display_layout'] = $form_state->getValue('terms_display_layout');
      $this->configuration['wrapper_class'] = $form_state->getValue('wrapper_class');
      $this->configuration['label_display'] = $form_state->getValue('label_display');
    }

    /**
     * {@inheritdoc}
     *
     * disable block cache to keep it the Vocabulary Block update.
     */
    public function getCacheMaxAge()
    {
      return 0;
    }
  }
