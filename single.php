<?php get_header(); ?>

<div class="content_wrap">
    <div class="container with_sidebar">
      <main class="main">
        <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
          <h1 class="page_title"><?php the_title(); ?></h1>
          <div class="block_content">
            <?php the_content(); ?>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <div class="sec_related">
          <h2 class="sec_related-title">関連記事</h2>
          <ul class="sec_related-list">
          <?php
            $categories = get_the_category();
            $category_ID = array();
            foreach($categories as $category):
            array_push( $category_ID, $category -> cat_ID);
            endforeach ;
            $args = array(
              'post__not_in' => array($post -> ID),
              'posts_per_page'=> -1,
              'category__in' => $category_ID,
              'orderby' => 'date',
              'order' => 'ASC',
            );
            $query = new WP_Query($args); 
          ?>
          <?php if($query -> have_posts()): ?>
            <?php while ($query -> have_posts()): $query -> the_post(); ?>
            <li class="icon-chevron-right"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          </ul>
        </div>
      </main>
      
<?php get_sidebar(); ?>
<?php get_footer(); ?>
