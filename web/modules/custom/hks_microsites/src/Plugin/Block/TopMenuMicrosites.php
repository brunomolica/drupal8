<?php

namespace Drupal\hks_microsites\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'TopMenuMicrosites' block.
 *
 * @Block(
 *  id = "top_menu_microsites",
 *  admin_label = @Translation("Top menu microsites"),
 * )
 */
class TopMenuMicrosites extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'top_menu_microsites';
     $build['top_menu_microsites']['#markup'] = 'Implement TopMenuMicrosites.';

    return $build;
  }

}
