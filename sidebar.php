<div class="sidebar">
  <h3 class="sidebar-title">マニュアルを探す</h3>
  <ul>
  <?php
    $categories = get_categories();
    foreach ($categories as $category):
  ?>
    <li class="icon-chevron-right"><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?></a></li>
  <?php endforeach; ?>
  </ul>
</div>
</div>
  
