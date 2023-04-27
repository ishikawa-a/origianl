<?php
// パンくずリスト
function custom_breadcrumb() {
  
  echo '<ol><li><a href="'.esc_url( home_url() ).'" >HOME</a></li>';
  
  if (is_singular()) {
    the_title('<li>', '</li>');
  }
  
  echo '</ol>';
}

// 抜粋文
function new_excerpt_more($more) {
    return '…';
}
add_filter('excerpt_more', 'new_excerpt_more');