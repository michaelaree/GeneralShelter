<?php

namespace Drupal\my_block_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

/**
 * The description of the block goes here.
 *
 * @Block(
 *   id = "my_user_demo",
 *   admin_label = @Translation("my block"),
 * )
 */


class UserInfoBlock extends BlockBase {

  public function build() {
    $current_user = \Drupal::currentUser();
    $username = $current_user->getDisplayName();
    
    return [
      '#markup' => $this->t('You are currently logged in as @username', ['@username' => $username]),
    ];
  }

 
  public function getCacheContexts() {
    return ['user'];
  }
}
